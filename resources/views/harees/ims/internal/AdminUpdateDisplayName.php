<?php
session_start();


// Secure admin check (place this at the top of admin-only pages)
session_start();

// Check if user is logged in and is an admin
if (!isset($_SESSION['username']) || 
    !isset($_SESSION['usertype']) || 
    strtoupper($_SESSION['usertype']) !== 'ADMIN' ||
    !isset($_SESSION['account_status']) || 
    $_SESSION['account_status'] !== 'Approved') {
    
    // Clear sensitive session data
    unset($_SESSION['username']);
    unset($_SESSION['usertype']);
    unset($_SESSION['name']);
    
    // Redirect to login with a message
    $_SESSION['login_error'] = "You must be an approved admin to access this page";
    header('Location: admin_login.php');
    exit();
}

// Optional: Regenerate session ID periodically for security
if (!isset($_SESSION['last_regeneration']) || time() - $_SESSION['last_regeneration'] > 300) {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}


// Database configuration
include_once('../db_connect.php');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Define all product tables
$tables = [
    // 18kdgold tables
    '18kdgold_product_anklets', '18kdgold_product_bangles', '18kdgold_product_bracelets',
    '18kdgold_product_chains', '18kdgold_product_earrings', '18kdgold_product_fancychains',
    '18kdgold_product_necklaces', '18kdgold_product_nosepins', '18kdgold_product_pendants',
    '18kdgold_product_rings', '18kdgold_product_secondstuds', '18kdgold_product_studs',
    
    // 18kgold tables
    '18kgold_product_anklets', '18kgold_product_bangles', '18kgold_product_bracelets',
    '18kgold_product_chains', '18kgold_product_earrings', '18kgold_product_fancychains',
    '18kgold_product_necklaces', '18kgold_product_nosepins', '18kgold_product_pendants',
    '18kgold_product_rings', '18kgold_product_secondstuds', '18kgold_product_studs',
    
    // 22kgold tables
    '22kgold_product_anklets', '22kgold_product_bangles', '22kgold_product_bracelets',
    '22kgold_product_chains', '22kgold_product_earrings', '22kgold_product_fancychains',
    '22kgold_product_necklaces', '22kgold_product_nosepins', '22kgold_product_pendants',
    '22kgold_product_rings', '22kgold_product_secondstuds', '22kgold_product_studs',
    
    // rosegold tables
    'rosegold_product_anklets', 'rosegold_product_bangles', 'rosegold_product_bracelets',
    'rosegold_product_chains', 'rosegold_product_earrings', 'rosegold_product_fancychains',
    'rosegold_product_necklaces', 'rosegold_product_nosepins', 'rosegold_product_pendants',
    'rosegold_product_rings', 'rosegold_product_secondstuds', 'rosegold_product_studs',
    
    // silver tables
    'silver_product_anklets', 'silver_product_bangles', 'silver_product_bracelets',
    'silver_product_chains', 'silver_product_earrings', 'silver_product_fancychains',
    'silver_product_kadas', 'silver_product_necklaces', 'silver_product_nosepins',
    'silver_product_pendants', 'silver_product_rings', 'silver_product_secondstuds',
    'silver_product_studs'
];

$message = '';
$error = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selected_table = $_POST['table'] ?? '';
    $product_id = $_POST['product_id'] ?? '';
    $display_name = trim($_POST['display_name'] ?? '');
    
    if (empty($selected_table) || empty($product_id) || empty($display_name)) {
        $error = 'All fields are required.';
    } else if (!in_array($selected_table, $tables)) {
        $error = 'Invalid table selected.';
    } else {
        try {
            // Update the display name
            $stmt = $pdo->prepare("UPDATE `$selected_table` SET t_display_name = ? WHERE id = ?");
            $result = $stmt->execute([$display_name, $product_id]);
            
            if ($stmt->rowCount() > 0) {
                $message = "Display name updated successfully for product ID $product_id in table $selected_table.";
            } else {
                $error = "No product found with ID $product_id in table $selected_table or no changes made.";
            }
        } catch(PDOException $e) {
            $error = "Database error: " . $e->getMessage();
        }
    }
}

// Get products from selected table for display
$products = [];
$selected_table_for_view = $_GET['view_table'] ?? ($_POST['table'] ?? '');

if ($selected_table_for_view && in_array($selected_table_for_view, $tables)) {
    try {
        $stmt = $pdo->prepare("SELECT id, product_code, name, t_display_name FROM `$selected_table_for_view` ORDER BY id DESC LIMIT 50");
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        $error = "Error fetching products: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Update Display Names</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        
        .content {
            padding: 30px;
        }
        
        .form-section {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        
        .form-group select,
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        
        .form-group select:focus,
        .form-group input:focus {
            outline: none;
            border-color: #667eea;
        }
        
        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: transform 0.2s ease;
            margin-right: 10px;
        }
        
        .btn:hover {
            transform: translateY(-2px);
        }
        
        .btn-secondary {
            background: #6c757d;
        }
        
        .alert {
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
        
        .alert-error {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }
        
        .products-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .products-table th,
        .products-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        .products-table th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #333;
        }
        
        .products-table tr:hover {
            background-color: #f8f9fa;
        }
        
        .quick-update {
            cursor: pointer;
            color: #667eea;
            text-decoration: underline;
        }
        
        .quick-update:hover {
            color: #764ba2;
        }
        
        .table-selector {
            margin-bottom: 20px;
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }
        
        .stat-number {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        @media (max-width: 768px) {
            .container {
                margin: 10px;
            }
            
            .content {
                padding: 20px;
            }
            
            .header {
                padding: 20px;
            }
            
            .header h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🏪 Product Display Name Manager</h1>
            <p>Update display names for products across all jewelry tables</p>
        </div>
        
        <div class="content">
            <?php if ($message): ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> <?php echo htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>
            
            <?php if ($error): ?>
                <div class="alert alert-error">
                    <strong>Error!</strong> <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            
            <div class="stats">
                <div class="stat-card">
                    <div class="stat-number"><?php echo count($tables); ?></div>
                    <div>Total Tables</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo count($products); ?></div>
                    <div>Products Loaded</div>
                </div>
            </div>
            
            <div class="form-section">
                <h2>🔧 Update Display Name</h2>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="table">Select Product Table:</label>
                        <select name="table" id="table" required>
                            <option value="">-- Select a table --</option>
                            <optgroup label="18K Diamond Gold">
                                <?php foreach ($tables as $table): ?>
                                    <?php if (strpos($table, '18kdgold_') === 0): ?>
                                        <option value="<?php echo $table; ?>" <?php echo ($selected_table_for_view === $table) ? 'selected' : ''; ?>>
                                            <?php echo ucwords(str_replace(['18kdgold_product_', '_'], ['', ' '], $table)); ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </optgroup>
                            <optgroup label="18K Gold">
                                <?php foreach ($tables as $table): ?>
                                    <?php if (strpos($table, '18kgold_') === 0): ?>
                                        <option value="<?php echo $table; ?>" <?php echo ($selected_table_for_view === $table) ? 'selected' : ''; ?>>
                                            <?php echo ucwords(str_replace(['18kgold_product_', '_'], ['', ' '], $table)); ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </optgroup>
                            <optgroup label="22K Gold">
                                <?php foreach ($tables as $table): ?>
                                    <?php if (strpos($table, '22kgold_') === 0): ?>
                                        <option value="<?php echo $table; ?>" <?php echo ($selected_table_for_view === $table) ? 'selected' : ''; ?>>
                                            <?php echo ucwords(str_replace(['22kgold_product_', '_'], ['', ' '], $table)); ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </optgroup>
                            <optgroup label="Rose Gold">
                                <?php foreach ($tables as $table): ?>
                                    <?php if (strpos($table, 'rosegold_') === 0): ?>
                                        <option value="<?php echo $table; ?>" <?php echo ($selected_table_for_view === $table) ? 'selected' : ''; ?>>
                                            <?php echo ucwords(str_replace(['rosegold_product_', '_'], ['', ' '], $table)); ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </optgroup>
                            <optgroup label="Silver">
                                <?php foreach ($tables as $table): ?>
                                    <?php if (strpos($table, 'silver_') === 0): ?>
                                        <option value="<?php echo $table; ?>" <?php echo ($selected_table_for_view === $table) ? 'selected' : ''; ?>>
                                            <?php echo ucwords(str_replace(['silver_product_', '_'], ['', ' '], $table)); ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </optgroup>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="product_id">Product ID:</label>
                        <input type="number" name="product_id" id="product_id" required min="1" placeholder="Enter product ID">
                    </div>
                    
                    <div class="form-group">
                        <label for="display_name">Display Name:</label>
                        <input type="text" name="display_name" id="display_name" required maxlength="100" placeholder="Enter display name">
                    </div>
                    
                    <button type="submit" class="btn">💾 Update Display Name</button>
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='?view_table=' + document.getElementById('table').value">🔍 View Products</button>
                </form>
            </div>
            
            <?php if (!empty($products)): ?>
                <div class="form-section">
                    <h2>📋 Products in <?php echo htmlspecialchars($selected_table_for_view); ?> (Latest 50)</h2>
                    <table class="products-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Code</th>
                                <th>Name</th>
                                <th>Current Display Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($product['id']); ?></td>
                                    <td><?php echo htmlspecialchars($product['product_code']); ?></td>
                                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                                    <td><?php echo htmlspecialchars($product['t_display_name'] ?: 'Not set'); ?></td>
                                    <td>
                                        <span class="quick-update" onclick="quickUpdate(<?php echo $product['id']; ?>, '<?php echo htmlspecialchars($product['name']); ?>')">
                                            Quick Update
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <script>
        function quickUpdate(productId, productName) {
            document.getElementById('product_id').value = productId;
            document.getElementById('display_name').value = productName;
            document.getElementById('display_name').focus();
            document.getElementById('display_name').select();
        }
        
        // Auto-refresh products when table selection changes
        document.getElementById('table').addEventListener('change', function() {
            if (this.value) {
                window.location.href = '?view_table=' + this.value;
            }
        });
    </script>
</body>
</html>