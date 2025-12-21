import re
import sys
import os
from typing import Dict, List, Set, Tuple, Any
from dataclasses import dataclass
from collections import defaultdict
from datetime import datetime
import glob

@dataclass
class TableRecord:
    """Represents a single record in a table"""
    values: List[str]
    raw_insert: str

@dataclass
class TableInfo:
    """Information about a table structure and data"""
    columns: List[str]
    records: Dict[str, TableRecord]  # Key is primary key value(s)
    primary_key_columns: List[str]
    create_statement: str

class SQLDumpComparator:
    def __init__(self):
        self.production_tables: Dict[str, TableInfo] = {}
        self.backup_tables: Dict[str, TableInfo] = {}
        
    def parse_sql_dump(self, sql_content: str) -> Dict[str, TableInfo]:
        """Parse SQL dump and extract table information"""
        tables = {}
        
        # Find all CREATE TABLE statements
        create_table_pattern = r'CREATE TABLE.*?`(\w+)`\s*\((.*?)\)\s*ENGINE'
        create_matches = re.findall(create_table_pattern, sql_content, re.DOTALL | re.IGNORECASE)
        
        for table_name, table_def in create_matches:
            # Extract column information
            columns = self._extract_columns(table_def)
            primary_key_columns = self._extract_primary_key(table_def)
            
            # Get the full CREATE TABLE statement
            create_stmt_pattern = f'CREATE TABLE.*?`{table_name}`.*?ENGINE[^;]*;'
            create_match = re.search(create_stmt_pattern, sql_content, re.DOTALL | re.IGNORECASE)
            create_statement = create_match.group(0) if create_match else ""
            
            tables[table_name] = TableInfo(
                columns=columns,
                records={},
                primary_key_columns=primary_key_columns,
                create_statement=create_statement
            )
        
        # Find all INSERT statements
        insert_pattern = r'INSERT INTO\s+`(\w+)`\s*\([^)]+\)\s*VALUES\s*(.*?);'
        insert_matches = re.findall(insert_pattern, sql_content, re.DOTALL | re.IGNORECASE)
        
        for table_name, values_part in insert_matches:
            if table_name in tables:
                # Parse multiple value sets
                records = self._parse_insert_values(values_part)
                table_info = tables[table_name]
                
                for record_values in records:
                    # Create primary key for this record
                    pk_value = self._create_primary_key(record_values, table_info)
                    table_info.records[pk_value] = TableRecord(
                        values=record_values,
                        raw_insert=f"INSERT INTO `{table_name}` VALUES ({', '.join(record_values)});"
                    )
        
        return tables
    
    def _extract_columns(self, table_def: str) -> List[str]:
        """Extract column names from CREATE TABLE definition"""
        columns = []
        lines = table_def.split('\n')
        
        for line in lines:
            line = line.strip()
            if line.startswith('`') and not line.startswith('PRIMARY KEY') and not line.startswith('KEY') and not line.startswith('UNIQUE'):
                # Extract column name
                column_match = re.match(r'`(\w+)`', line)
                if column_match:
                    columns.append(column_match.group(1))
        
        return columns
    
    def _extract_primary_key(self, table_def: str) -> List[str]:
        """Extract primary key column names"""
        pk_pattern = r'PRIMARY KEY\s*\(\s*`([^`]+)`\s*\)'
        pk_match = re.search(pk_pattern, table_def, re.IGNORECASE)
        
        if pk_match:
            return [pk_match.group(1)]
        
        # If no explicit PRIMARY KEY, look for AUTO_INCREMENT column
        auto_inc_pattern = r'`(\w+)`[^,\n]*AUTO_INCREMENT'
        auto_inc_match = re.search(auto_inc_pattern, table_def, re.IGNORECASE)
        
        if auto_inc_match:
            return [auto_inc_match.group(1)]
        
        return ['id']  # Default assumption
    
    def _parse_insert_values(self, values_part: str) -> List[List[str]]:
        """Parse VALUES part of INSERT statement"""
        records = []
        
        # Handle multiple value sets like (1, 'a'), (2, 'b')
        # This is a simplified parser - you might need to make it more robust
        value_sets = re.findall(r'\(([^)]+)\)', values_part)
        
        for value_set in value_sets:
            # Split by comma but be careful with quoted strings
            values = self._split_values(value_set)
            records.append(values)
        
        return records
    
    def _split_values(self, value_set: str) -> List[str]:
        """Split comma-separated values, handling quoted strings"""
        values = []
        current_value = ""
        in_quote = False
        quote_char = None
        
        i = 0
        while i < len(value_set):
            char = value_set[i]
            
            if not in_quote:
                if char in ("'", '"'):
                    in_quote = True
                    quote_char = char
                    current_value += char
                elif char == ',':
                    values.append(current_value.strip())
                    current_value = ""
                else:
                    current_value += char
            else:
                current_value += char
                if char == quote_char:
                    # Check if it's escaped
                    if i + 1 < len(value_set) and value_set[i + 1] == quote_char:
                        current_value += quote_char
                        i += 1
                    else:
                        in_quote = False
                        quote_char = None
            
            i += 1
        
        if current_value.strip():
            values.append(current_value.strip())
        
        return values
    
    def _create_primary_key(self, record_values: List[str], table_info: TableInfo) -> str:
        """Create a primary key string for a record"""
        pk_values = []
        
        for pk_col in table_info.primary_key_columns:
            try:
                col_index = table_info.columns.index(pk_col)
                if col_index < len(record_values):
                    pk_values.append(record_values[col_index])
            except ValueError:
                # Column not found, use first value as fallback
                pk_values.append(record_values[0] if record_values else "")
        
        return "|".join(pk_values)
    
    def compare_dumps(self, production_sql: str, backup_sql: str) -> Dict[str, Any]:
        """Compare two SQL dumps and return differences"""
        print("Parsing production database dump...")
        self.production_tables = self.parse_sql_dump(production_sql)
        
        print("Parsing backup database dump...")
        self.backup_tables = self.parse_sql_dump(backup_sql)
        
        differences = {
            'missing_tables': [],
            'missing_records': defaultdict(list),
            'table_stats': {}
        }
        
        # Find missing tables
        for table_name in self.production_tables:
            if table_name not in self.backup_tables:
                differences['missing_tables'].append(table_name)
        
        # Find missing records in existing tables
        for table_name, prod_table in self.production_tables.items():
            if table_name in self.backup_tables:
                backup_table = self.backup_tables[table_name]
                
                missing_records = []
                for pk, record in prod_table.records.items():
                    if pk not in backup_table.records:
                        missing_records.append(record)
                
                if missing_records:
                    differences['missing_records'][table_name] = missing_records
                
                # Statistics
                differences['table_stats'][table_name] = {
                    'production_count': len(prod_table.records),
                    'backup_count': len(backup_table.records),
                    'missing_count': len(missing_records)
                }
        
        return differences
    
    def generate_sync_sql(self, differences: Dict[str, Any]) -> str:
        """Generate SQL statements to sync backup with production"""
        sql_statements = []
        
        # Header comment
        sql_statements.append("-- SQL Sync Script")
        sql_statements.append("-- Generated to sync backup database with production")
        sql_statements.append(f"-- Generated on: {datetime.now().strftime('%Y-%m-%d %H:%M:%S')}")
        sql_statements.append("")
        
        # Create missing tables
        if differences['missing_tables']:
            sql_statements.append("-- Missing Tables")
            sql_statements.append("-- ==============")
            
            for table_name in differences['missing_tables']:
                if table_name in self.production_tables:
                    sql_statements.append(f"-- Creating table: {table_name}")
                    sql_statements.append(f"DROP TABLE IF EXISTS `{table_name}`;")
                    sql_statements.append(self.production_tables[table_name].create_statement)
                    sql_statements.append("")
        
        # Insert missing records
        if differences['missing_records']:
            sql_statements.append("-- Missing Records")
            sql_statements.append("-- ===============")
            
            for table_name, missing_records in differences['missing_records'].items():
                if missing_records:
                    sql_statements.append(f"-- Inserting {len(missing_records)} missing records into {table_name}")
                    
                    for record in missing_records:
                        sql_statements.append(record.raw_insert)
                    
                    sql_statements.append("")
        
        # Add statistics as comments
        sql_statements.append("-- Statistics Summary")
        sql_statements.append("-- ==================")
        
        for table_name, stats in differences['table_stats'].items():
            if stats['missing_count'] > 0:
                sql_statements.append(
                    f"-- {table_name}: {stats['missing_count']} missing out of {stats['production_count']} total records"
                )
        
        return "\n".join(sql_statements)
    
    def print_summary(self, differences: Dict[str, Any]):
        """Print a summary of differences found"""
        print("\n" + "="*60)
        print("DATABASE COMPARISON SUMMARY")
        print("="*60)
        
        if differences['missing_tables']:
            print(f"\nMissing Tables: {len(differences['missing_tables'])}")
            for table in differences['missing_tables']:
                print(f"  - {table}")
        
        if differences['missing_records']:
            print(f"\nTables with Missing Records: {len(differences['missing_records'])}")
            total_missing = 0
            
            for table_name, missing_records in differences['missing_records'].items():
                count = len(missing_records)
                total_missing += count
                print(f"  - {table_name}: {count} missing records")
        
        print(f"\nTotal Missing Records: {total_missing}")
        
        if differences['table_stats']:
            print("\nDetailed Statistics:")
            for table_name, stats in differences['table_stats'].items():
                print(f"  {table_name}:")
                print(f"    Production: {stats['production_count']} records")
                print(f"    Backup: {stats['backup_count']} records")
                print(f"    Missing: {stats['missing_count']} records")


def download_result(filename="database_sync.sql"):
    """Download the result file in Colab"""
    try:
        from google.colab import files
        if os.path.exists(filename):
            files.download(filename)
            print(f"📥 Downloaded {filename}")
        else:
            print(f"❌ File {filename} not found")
    except ImportError:
        print("❌ This function is only available in Google Colab")


def compare_sql_files(production_file="prod.sql", backup_file="backup.sql", output_file="database_sync.sql"):
    """
    Main function to compare SQL dumps - works in both Colab and local machine
    
    Args:
        production_file: Path to production SQL file (default: "prod.sql")
        backup_file: Path to backup SQL file (default: "backup.sql")
        output_file: Output file name for sync SQL (default: "database_sync.sql")
    """
    # Check if running in Colab
    try:
        import google.colab
        IN_COLAB = True
        print("🔍 Running in Google Colab")
    except ImportError:
        IN_COLAB = False
        print("🔍 Running in local environment")
    
    print(f"\n📊 SQL Dump Comparison Tool")
    print("="*40)
    
    print(f"\n📁 Files to compare:")
    print(f"  Production: {production_file}")
    print(f"  Backup: {backup_file}")
    print(f"  Output: {output_file}")
    
    # Check if files exist
    if not os.path.exists(production_file):
        print(f"❌ Error: Production file '{production_file}' not found!")
        return None
    
    if not os.path.exists(backup_file):
        print(f"❌ Error: Backup file '{backup_file}' not found!")
        return None
    
    try:
        # Show file sizes
        prod_size = os.path.getsize(production_file)
        backup_size = os.path.getsize(backup_file)
        print(f"\n📊 File sizes:")
        print(f"  Production: {prod_size:,} bytes")
        print(f"  Backup: {backup_size:,} bytes")
        
        # Read production dump
        print(f"\n📖 Reading production dump...")
        with open(production_file, 'r', encoding='utf-8') as f:
            production_sql = f.read()
        
        # Read backup dump
        print(f"📖 Reading backup dump...")
        with open(backup_file, 'r', encoding='utf-8') as f:
            backup_sql = f.read()
        
        # Create comparator and compare
        comparator = SQLDumpComparator()
        print("🔄 Comparing databases...")
        differences = comparator.compare_dumps(production_sql, backup_sql)
        
        # Print summary
        comparator.print_summary(differences)
        
        # Generate sync SQL
        print(f"\n📝 Generating sync SQL...")
        sync_sql = comparator.generate_sync_sql(differences)
        
        # Save to file
        with open(output_file, 'w', encoding='utf-8') as f:
            f.write(sync_sql)
        
        print(f"\n✅ Sync SQL script generated: {output_file}")
        
        # Show file size for reference
        file_size = os.path.getsize(output_file)
        print(f"📊 Output file size: {file_size:,} bytes")
        
        if differences['missing_records'] or differences['missing_tables']:
            print(f"\n⚠️  Differences found! Review {output_file} and execute it on your backup database.")
            if IN_COLAB:
                print("💡 Tip: Use download_result() to download the sync file")
        else:
            print(f"\n✅ No differences found! Backup and production are in sync.")
        
        return differences
            
    except FileNotFoundError as e:
        print(f"❌ Error: File not found - {e}")
        return None
    except PermissionError as e:
        print(f"❌ Error: Permission denied - {e}")
        return None
    except Exception as e:
        print(f"❌ Error: {e}")
        import traceback
        traceback.print_exc()
        return None


# Main execution function
def main():
    """Main function - can be used with file variables or command line"""
    # Set your file names here
    backup_file = "backup.sql"
    production_file = "prod.sql"
    
    # Command line arguments override the defaults
    if len(sys.argv) >= 3:
        production_file = sys.argv[1]
        backup_file = sys.argv[2]
        output_file = sys.argv[3] if len(sys.argv) >= 4 else "database_sync.sql"
        return compare_sql_files(production_file, backup_file, output_file)
    else:
        return compare_sql_files(production_file, backup_file)


if __name__ == "__main__":
    main()

# Usage Examples:
"""
# Basic usage with default file names:
backup_file = "backup.sql"
production_file = "prod.sql"
differences = compare_sql_files(production_file, backup_file)

# Custom file names:
differences = compare_sql_files("my_prod.sql", "my_backup.sql", "my_sync.sql")

# In Colab, download the result:
differences = compare_sql_files()
download_result()  # Downloads database_sync.sql

# Command line usage:
# python script.py production.sql backup.sql output.sql
"""