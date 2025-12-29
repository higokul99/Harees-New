<?php
// making_charges_form.php
include_once('../db_connect.php');
// Initialize variables
$errors = [];
$success_message = '';
$models = [];
$metal_purities = [];
$categories = [];

// Fetch dropdown data
// Fetch models
$result = $conn->query("SELECT model_id, model_name FROM models ORDER BY model_name");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $models[] = $row;
    }
} else {
    $errors[] = "Error fetching models: " . $conn->error;
}

// Fetch metal purities
$result = $conn->query("SELECT metalpurity_id, name, code FROM metals_purity ORDER BY name");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $metal_purities[] = $row;
    }
} else {
    $errors[] = "Error fetching metal purities: " . $conn->error;
}

// Fetch categories
$result = $conn->query("SELECT cat_id, name, code FROM categories ORDER BY name");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
} else {
    $errors[] = "Error fetching categories: " . $conn->error;
}

// Function to get making charges data
function getMakingChargesData($conn) {
    $making_charges_data = [];
    
    // Get 18K Gold and 22K Gold metal purity IDs and names
    $metal_purities_query = "SELECT metalpurity_id, name FROM metals_purity WHERE name LIKE '%18K Gold%' OR name LIKE '%22K Gold%' ORDER BY name";
    $metal_result = $conn->query($metal_purities_query);
    
    if ($metal_result) {
        while ($metal_row = $metal_result->fetch_assoc()) {
            $metal_purity_id = $metal_row['metalpurity_id'];
            $metal_purity_name = $metal_row['name'];
            
            // Get all models for this metal purity
            $models_query = "SELECT DISTINCT m.model_id, m.model_name 
                           FROM models m 
                           INNER JOIN making_charges mc ON m.model_id = mc.model_id 
                           WHERE mc.metalpurity_id = ? 
                           ORDER BY m.model_name";
            
            $stmt = $conn->prepare($models_query);
            if ($stmt) {
                $stmt->bind_param("i", $metal_purity_id);
                $stmt->execute();
                $models_result = $stmt->get_result();
                
                while ($model_row = $models_result->fetch_assoc()) {
                    $model_id = $model_row['model_id'];
                    $model_name = $model_row['model_name'];
                    
                    // Get making charges for this metal purity and model combination
                    $charges_query = "SELECT mc.*, c.name as category_name, c.code as category_code 
                                    FROM making_charges mc 
                                    LEFT JOIN categories c ON mc.cat_id = c.cat_id 
                                    WHERE mc.metalpurity_id = ? AND mc.model_id = ? 
                                    ORDER BY c.name";
                    
                    $charges_stmt = $conn->prepare($charges_query);
                    if ($charges_stmt) {
                        $charges_stmt->bind_param("ii", $metal_purity_id, $model_id);
                        $charges_stmt->execute();
                        $charges_result = $charges_stmt->get_result();
                        
                        $charges_data = [];
                        while ($charge_row = $charges_result->fetch_assoc()) {
                            $charges_data[] = $charge_row;
                        }
                        
                        if (!empty($charges_data)) {
                            $making_charges_data[] = [
                                'metal_purity_name' => $metal_purity_name,
                                'model_name' => $model_name,
                                'charges' => $charges_data
                            ];
                        }
                        $charges_stmt->close();
                    }
                }
                $stmt->close();
            }
        }
    }
    
    return $making_charges_data;
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate input
    $metalpurity_id = filter_input(INPUT_POST, 'metalpurity_id', FILTER_VALIDATE_INT);
    $model_id = filter_input(INPUT_POST, 'model_id', FILTER_VALIDATE_INT);
    $model_name = trim(filter_input(INPUT_POST, 'model_name', FILTER_SANITIZE_SPECIAL_CHARS));
    $cat_id = filter_input(INPUT_POST, 'cat_id', FILTER_VALIDATE_INT);
    $normal_mc = filter_input(INPUT_POST, 'normal_mc', FILTER_VALIDATE_FLOAT);
    $discount_mc = filter_input(INPUT_POST, 'discount_mc', FILTER_VALIDATE_FLOAT);
    $excp_normal_mc = filter_input(INPUT_POST, 'excp_normal_mc', FILTER_VALIDATE_FLOAT);
    $excp_discount_mc = filter_input(INPUT_POST, 'excp_discount_mc', FILTER_VALIDATE_FLOAT);
    
    // Validation
    if (!$metalpurity_id || $metalpurity_id <= 0) {
        $errors[] = "Please select a valid metal purity.";
    }
    
    if (!$model_id || $model_id <= 0) {
        $errors[] = "Please select a valid model.";
    }
    
    if (empty($model_name) || strlen($model_name) > 50) {
        $errors[] = "Model name is required and must be less than 50 characters.";
    }
    
    if (!$cat_id || $cat_id <= 0) {
        $errors[] = "Please select a valid category.";
    }
    
    if ($normal_mc === false || $normal_mc < 0 || $normal_mc > 99.999) {
        $errors[] = "Normal MC must be a valid number between 0 and 99.999.";
    }
    
    if ($discount_mc === false || $discount_mc < 0 || $discount_mc > 99.999) {
        $errors[] = "Discount MC must be a valid number between 0 and 99.999.";
    }
    
    if ($excp_normal_mc === false || $excp_normal_mc < 0 || $excp_normal_mc > 99.999) {
        $errors[] = "Exception Normal MC must be a valid number between 0 and 99.999.";
    }
    
    if ($excp_discount_mc === false || $excp_discount_mc < 0 || $excp_discount_mc > 99.999) {
        $errors[] = "Exception Discount MC must be a valid number between 0 and 99.999.";
    }
    
    // Check for duplicate entry
    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT COUNT(*) as count FROM making_charges WHERE metalpurity_id = ? AND model_id = ? AND cat_id = ?");
        if ($stmt) {
            $stmt->bind_param("iii", $metalpurity_id, $model_id, $cat_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            
            if ($row['count'] > 0) {
                $errors[] = "A record with this combination of Metal Purity, Model, and Category already exists.";
            }
            $stmt->close();
        } else {
            $errors[] = "Error checking for duplicates: " . $conn->error;
        }
    }
    
    // Insert data if no errors
    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO making_charges (metalpurity_id, model_id, model_name, cat_id, normal_mc, discount_mc, excp_normal_mc, excp_discount_mc, last_updated) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");
        
        if ($stmt) {
            $stmt->bind_param("iisidddd", $metalpurity_id, $model_id, $model_name, $cat_id, $normal_mc, $discount_mc, $excp_normal_mc, $excp_discount_mc);
            
            if ($stmt->execute()) {
                $success_message = "Making charge record added successfully!";
                // Clear form data after successful insertion
                $_POST = [];
            } else {
                $errors[] = "Error inserting data: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $errors[] = "Error preparing statement: " . $conn->error;
        }
    }
}

// Get making charges data for display
$making_charges_display = getMakingChargesData($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Making Charges</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
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
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        h2 {
            color: #444;
            margin-bottom: 15px;
            margin-top: 30px;
            font-size: 22px;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }
        
        h3 {
            color: #555;
            margin-bottom: 15px;
            margin-top: 25px;
            font-size: 18px;
            background-color: #f8f9fa;
            padding: 10px;
            border-left: 4px solid #4CAF50;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #555;
        }
        
        input, select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        
        input:focus, select:focus {
            outline: none;
            border-color: #4CAF50;
        }
        
        .form-row {
            display: flex;
            gap: 20px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        
        .btn:hover {
            background-color: #45a049;
        }
        
        .btn:disabled {
            background-color: #cccccc;
            cursor: not-allowed;
        }
        
        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
        }
        
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }
        
        .error-field {
            border-color: #dc3545 !important;
        }
        
        .field-error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }
        
        .required {
            color: #dc3545;
        }
        
        /* Table Styles */
        .table-container {
            margin-top: 20px;
            overflow-x: auto;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
            background: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        tr:nth-child(even):hover {
            background-color: #f0f0f0;
        }
        
        td {
            color: #333;
            font-size: 14px;
        }
        
        .numeric {
            text-align: right;
            font-family: monospace;
            font-weight: 600;
        }
        
        .divider {
            border-top: 3px solid #4CAF50;
            margin: 40px 0 20px 0;
        }
        
        .no-data {
            text-align: center;
            color: #666;
            font-style: italic;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 6px;
            margin: 20px 0;
        }
        
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
            }
            
            .container {
                padding: 15px;
            }
            
            table {
                font-size: 12px;
            }
            
            th, td {
                padding: 8px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Making Charges</h1>
        
        <?php if (!empty($errors)): ?>
            <div class="error">
                <strong>Please fix the following errors:</strong>
                <ul style="margin-top: 10px; margin-left: 20px;">
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <?php if ($success_message): ?>
            <div class="success">
                <strong><?php echo htmlspecialchars($success_message); ?></strong>
            </div>
        <?php endif; ?>
        
        <form id="makingChargesForm" method="POST" action="" onsubmit="return validateForm()">
            <div class="form-row">
                <div class="form-group">
                    <label for="metalpurity_id">Metal Purity <span class="required">*</span></label>
                    <select id="metalpurity_id" name="metalpurity_id" required>
                        <option value="">Select Metal Purity</option>
                        <?php foreach ($metal_purities as $purity): ?>
                            <option value="<?php echo $purity['metalpurity_id']; ?>" 
                                    <?php echo (isset($_POST['metalpurity_id']) && $_POST['metalpurity_id'] == $purity['metalpurity_id']) ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($purity['name'] . ' (' . $purity['code'] . ')'); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="model_id">Model <span class="required">*</span></label>
                    <select id="model_id" name="model_id" required onchange="updateModelName()">
                        <option value="">Select Model</option>
                        <?php foreach ($models as $model): ?>
                            <option value="<?php echo $model['model_id']; ?>" 
                                    data-name="<?php echo htmlspecialchars($model['model_name']); ?>"
                                    <?php echo (isset($_POST['model_id']) && $_POST['model_id'] == $model['model_id']) ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($model['model_name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="model_name">Model Name <span class="required">*</span></label>
                    <input type="text" id="model_name" name="model_name" maxlength="50" required
                           value="<?php echo isset($_POST['model_name']) ? htmlspecialchars($_POST['model_name']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <label for="cat_id">Category <span class="required">*</span></label>
                    <select id="cat_id" name="cat_id" required>
                        <option value="">Select Category</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category['cat_id']; ?>" 
                                    <?php echo (isset($_POST['cat_id']) && $_POST['cat_id'] == $category['cat_id']) ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($category['name'] . ' (' . $category['code'] . ')'); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="normal_mc">Normal MC <span class="required">*</span></label>
                    <input type="number" id="normal_mc" name="normal_mc" step="0.001" min="0" max="99.999" required
                           value="<?php echo isset($_POST['normal_mc']) ? htmlspecialchars($_POST['normal_mc']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <label for="discount_mc">Discount MC <span class="required">*</span></label>
                    <input type="number" id="discount_mc" name="discount_mc" step="0.001" min="0" max="99.999" required
                           value="<?php echo isset($_POST['discount_mc']) ? htmlspecialchars($_POST['discount_mc']) : ''; ?>">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="excp_normal_mc">Exception Normal MC <span class="required">*</span></label>
                    <input type="number" id="excp_normal_mc" name="excp_normal_mc" step="0.001" min="0" max="99.999" required
                           value="<?php echo isset($_POST['excp_normal_mc']) ? htmlspecialchars($_POST['excp_normal_mc']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <label for="excp_discount_mc">Exception Discount MC <span class="required">*</span></label>
                    <input type="number" id="excp_discount_mc" name="excp_discount_mc" step="0.001" min="0" max="99.999" required
                           value="<?php echo isset($_POST['excp_discount_mc']) ? htmlspecialchars($_POST['excp_discount_mc']) : ''; ?>">
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn">Add Making Charge</button>
            </div>
        </form>
        
        <div class="divider"></div>
        
        <!-- Display Making Charges Data -->
        <h2>Current Making Charges (18K Gold & 22K Gold)</h2>
        
        <?php if (empty($making_charges_display)): ?>
            <div class="no-data">
                No making charges data found for 18K Gold and 22K Gold.
            </div>
        <?php else: ?>
            <?php foreach ($making_charges_display as $data): ?>
                <h3><?php echo htmlspecialchars($data['metal_purity_name'] . ' (' . $data['model_name'] . ') Making Charges'); ?></h3>
                
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Normal MC</th>
                                <th>Discount MC</th>
                                <th>Exception Normal MC</th>
                                <th>Exception Discount MC</th>
                                <th>Last Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['charges'] as $charge): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($charge['category_name'] . ' (' . $charge['category_code'] . ')'); ?></td>
                                    <td class="numeric"><?php echo number_format($charge['normal_mc'], 3); ?></td>
                                    <td class="numeric"><?php echo number_format($charge['discount_mc'], 3); ?></td>
                                    <td class="numeric"><?php echo number_format($charge['excp_normal_mc'], 3); ?></td>
                                    <td class="numeric"><?php echo number_format($charge['excp_discount_mc'], 3); ?></td>
                                    <td><?php echo date('Y-m-d H:i:s', strtotime($charge['last_updated'])); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    
    <script>
        function updateModelName() {
            const modelSelect = document.getElementById('model_id');
            const modelNameInput = document.getElementById('model_name');
            const selectedOption = modelSelect.options[modelSelect.selectedIndex];
            
            if (selectedOption.value) {
                modelNameInput.value = selectedOption.getAttribute('data-name');
            } else {
                modelNameInput.value = '';
            }
        }
        
        function validateForm() {
            let isValid = true;
            const errors = [];
            
            // Remove previous error styling
            document.querySelectorAll('.error-field').forEach(field => {
                field.classList.remove('error-field');
            });
            document.querySelectorAll('.field-error').forEach(error => {
                error.remove();
            });
            
            // Validate Metal Purity
            const metalpurityId = document.getElementById('metalpurity_id').value;
            if (!metalpurityId) {
                showFieldError('metalpurity_id', 'Please select a metal purity.');
                isValid = false;
            }
            
            // Validate Model
            const modelId = document.getElementById('model_id').value;
            if (!modelId) {
                showFieldError('model_id', 'Please select a model.');
                isValid = false;
            }
            
            // Validate Model Name
            const modelName = document.getElementById('model_name').value.trim();
            if (!modelName) {
                showFieldError('model_name', 'Model name is required.');
                isValid = false;
            } else if (modelName.length > 50) {
                showFieldError('model_name', 'Model name must be less than 50 characters.');
                isValid = false;
            }
            
            // Validate Category
            const catId = document.getElementById('cat_id').value;
            if (!catId) {
                showFieldError('cat_id', 'Please select a category.');
                isValid = false;
            }
            
            // Validate numeric fields
            const numericFields = ['normal_mc', 'discount_mc', 'excp_normal_mc', 'excp_discount_mc'];
            numericFields.forEach(fieldName => {
                const field = document.getElementById(fieldName);
                const value = parseFloat(field.value);
                
                if (isNaN(value) || value < 0 || value > 99.999) {
                    showFieldError(fieldName, 'Value must be between 0 and 99.999.');
                    isValid = false;
                }
            });
            
            return isValid;
        }
        
        function showFieldError(fieldId, message) {
            const field = document.getElementById(fieldId);
            field.classList.add('error-field');
            
            const errorDiv = document.createElement('div');
            errorDiv.className = 'field-error';
            errorDiv.textContent = message;
            
            field.parentNode.appendChild(errorDiv);
        }
        
        // Real-time validation
        document.addEventListener('DOMContentLoaded', function() {
            const numericInputs = document.querySelectorAll('input[type="number"]');
            numericInputs.forEach(input => {
                input.addEventListener('input', function() {
                    const value = parseFloat(this.value);
                    if (value > 99.999) {
                        this.value = 99.999;
                    } else if (value < 0) {
                        this.value = 0;
                    }
                });
            });
        });
    </script>
</body>
</html>