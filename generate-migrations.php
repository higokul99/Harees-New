#!/usr/bin/env php
<?php
/**
 * Database Migration Generator
 * Generates Laravel migrations from SQL file
 */

$sqlFile = __DIR__ . '/resources/views/harees/DB/u784516105_hareesimsdev.sql';
$migrationsDir = __DIR__ . '/database/migrations';

if (!file_exists($sqlFile)) {
    die("SQL file not found!\n");
}

$sql = file_get_contents($sqlFile);

// Extract all CREATE TABLE statements
preg_match_all('/CREATE TABLE `([^`]+)` \((.*?)\) ENGINE/s', $sql, $matches, PREG_SET_ORDER);

$timestamp = date('Y_m_d_His');
$counter = 0;

foreach ($matches as $match) {
    $tableName = $match[1];
    $tableFields = $match[2];
    
    // Skip if table already exists (users, sessions, etc.)
    if (in_array($tableName, ['users', 'password_reset_tokens', 'sessions', 'cache', 'jobs', 'failed_jobs'])) {
        continue;
    }
    
    $counter++;
    $migrationName = "create_{$tableName}_table";
    $className = str_replace('_', '', ucwords($migrationName, '_'));
    $fileName = date('Y_m_d_His', strtotime("+{$counter} seconds")) . "_{$migrationName}.php";
    
    // Parse fields
    $fields = [];
    $lines = explode("\n", $tableFields);
    
    foreach ($lines as $line) {
        $line = trim($line);
        if (empty($line) || strpos($line, 'PRIMARY KEY') !== false || strpos($line, 'KEY ') !== false) {
            continue;
        }
        
        // Simple field parsing
        if (preg_match('/`([^`]+)`\s+(\w+)(\([^)]+\))?/', $line, $fieldMatch)) {
            $fieldName = $fieldMatch[1];
            $fieldType = strtolower($fieldMatch[2]);
            
            $laravelType = match($fieldType) {
                'int' => 'integer',
                'varchar' => 'string',
                'text', 'longtext' => 'text',
                'datetime' => 'dateTime',
                'decimal' => 'decimal',
                'enum' => 'enum',
                'tinyint' => 'boolean',
                default => 'string'
            };
            
            $nullable = strpos($line, 'DEFAULT NULL') !== false || strpos($line, 'NULL') !== false;
            $default = null;
            
            if (preg_match('/DEFAULT\s+\'([^\']+)\'/', $line, $defaultMatch)) {
                $default = $defaultMatch[1];
            } elseif (preg_match('/DEFAULT\s+(\d+)/', $line, $defaultMatch)) {
                $default = $defaultMatch[1];
            }
            
            $fields[] = [
                'name' => $fieldName,
                'type' => $laravelType,
                'nullable' => $nullable,
                'default' => $default
            ];
        }
    }
    
    // Generate migration content
    $migrationContent = generateMigration($className, $tableName, $fields);
    
    file_put_contents("{$migrationsDir}/{$fileName}", $migrationContent);
    echo "Created: {$fileName}\n";
}

echo "\nGenerated {$counter} migrations!\n";

function generateMigration($className, $tableName, $fields) {
    $fieldsCode = '';
    
    foreach ($fields as $field) {
        if ($field['name'] === 'id') {
            $fieldsCode .= "            \$table->id();\n";
            continue;
        }
        
        if (in_array($field['name'], ['created_at', 'updated_at'])) {
            continue; // Will use timestamps()
        }
        
        $line = "            \$table->{$field['type']}('{$field['name']}')";
        
        if ($field['nullable']) {
            $line .= "->nullable()";
        }
        
        if ($field['default'] !== null) {
            if (is_numeric($field['default'])) {
                $line .= "->default({$field['default']})";
            } else {
                $line .= "->default('{$field['default']}')";
            }
        }
        
        $line .= ";\n";
        $fieldsCode .= $line;
    }
    
    return <<<PHP
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('{$tableName}', function (Blueprint \$table) {
{$fieldsCode}            \$table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('{$tableName}');
    }
};
PHP;
}
