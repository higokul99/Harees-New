<?php
include_once('includes/header.php');
include_once('../db_connect.php');

// Handle AJAX requests for toggling delist status
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'toggle_delist') {
    // Clean output buffer to prevent any extra output
    ob_clean();
    header('Content-Type: application/json');
    
    // Add debug logging
    error_log("Toggle delist request received");
    error_log("POST data: " . print_r($_POST, true));
    
    $id = intval($_POST['id'] ?? 0);
    $table = preg_replace('/[^a-zA-Z0-9_]/', '', $_POST['table'] ?? '');
    $delist = ($_POST['delist'] == '1') ? 1 : 0;

    error_log("Processed values - ID: $id, Table: $table, Delist: $delist");

    if ($id > 0 && $table) {
        try {
            // Check database connection
            if (!$conn) {
                error_log("Database connection failed");
                echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
                exit;
            }

            // Check if table exists
            $check_table = $conn->query("SHOW TABLES LIKE '$table'");
            if ($check_table && $check_table->num_rows > 0) {
                error_log("Table $table exists");
                
                // Check if delist column exists
                $check_column = $conn->query("SHOW COLUMNS FROM `$table` LIKE 'delist'");
                if ($check_column && $check_column->num_rows > 0) {
                    error_log("Delist column exists in $table");
                    
                    // Check if record exists
                    $check_record = $conn->prepare("SELECT id FROM `$table` WHERE id = ?");
                    if ($check_record) {
                        $check_record->bind_param("i", $id);
                        $check_record->execute();
                        $result = $check_record->get_result();
                        if ($result->num_rows > 0) {
                            error_log("Record with ID $id exists in $table");
                            
                            // Update the delist status
                            $stmt = $conn->prepare("UPDATE `$table` SET delist = ? WHERE id = ?");
                            if ($stmt) {
                                $stmt->bind_param("ii", $delist, $id);
                                if ($stmt->execute()) {
                                    $affected_rows = $stmt->affected_rows;
                                    error_log("Update successful. Affected rows: $affected_rows");
                                    
                                    if ($affected_rows > 0) {
                                        echo json_encode(['status' => 'success', 'message' => 'Updated successfully']);
                                    } else {
                                        echo json_encode(['status' => 'warning', 'message' => 'No rows were updated']);
                                    }
                                } else {
                                    $error = $stmt->error;
                                    error_log("Update execution failed: $error");
                                    echo json_encode(['status' => 'error', 'message' => 'Update failed: ' . $error]);
                                }
                                $stmt->close();
                            } else {
                                $error = $conn->error;
                                error_log("Prepare failed: $error");
                                echo json_encode(['status' => 'error', 'message' => 'Prepare failed: ' . $error]);
                            }
                        } else {
                            error_log("Record with ID $id not found in $table");
                            echo json_encode(['status' => 'error', 'message' => 'Record not found']);
                        }
                        $check_record->close();
                    } else {
                        error_log("Failed to prepare record check query");
                        echo json_encode(['status' => 'error', 'message' => 'Record check failed']);
                    }
                } else {
                    error_log("Delist column missing in $table");
                    echo json_encode(['status' => 'error', 'message' => 'Delist column missing']);
                }
            } else {
                error_log("Table $table not found");
                echo json_encode(['status' => 'error', 'message' => 'Table not found']);
            }
        } catch (Exception $e) {
            $error_msg = $e->getMessage();
            error_log("Exception occurred: $error_msg");
            echo json_encode(['status' => 'error', 'message' => $error_msg]);
        }
    } else {
        error_log("Invalid parameters - ID: $id, Table: $table");
        echo json_encode(['status' => 'error', 'message' => 'Invalid parameters']);
    }
    exit;
}

// Handle AJAX request to fetch products
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['material']) && isset($_POST['category'])) {
    $material = strtolower(trim($_POST['material']));
    $category = strtolower(trim($_POST['category']));

    $table_prefixes = [
        '18k gold' => '18kgold_product_',
        '22k gold' => '22kgold_product_',
        'diamond' => '18kd_product_',
        'silver' => 'silver_product_',
        'rosegold' => 'rosegold_product_'
    ];

    if (array_key_exists($material, $table_prefixes)) {
        $table_name = $table_prefixes[$material] . str_replace(' ', '', $category);
        $check = $conn->query("SHOW TABLES LIKE '$table_name'");
        if ($check->num_rows > 0) {
            $result = $conn->query("SELECT * FROM `$table_name` ORDER BY id ASC");
            if ($result && $result->num_rows > 0) {
                $serial_no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $serial_no . "</td>";
                    echo "<td>" . htmlspecialchars($row['product_code'] ?? '') . "</td>";
                    $imgPath = htmlspecialchars($row['img2'] ?? '');
                    echo "<td><a href='$imgPath' target='_blank'><img src='$imgPath' width='50' style='cursor: pointer;'></a></td>";
                    
                    // Delist toggle
                    $delist = intval($row['delist'] ?? 0);
                    echo "<td><div class='form-check form-switch'>
                            <input class='form-check-input toggle-delist' type='checkbox' role='switch'
                                data-id='" . htmlspecialchars($row['id']) . "'
                                data-table='" . htmlspecialchars($table_name) . "'
                                " . ($delist ? 'checked' : '') . ">
                        </div></td>";
                    
                    echo "<td>
                            <a href='AddProductDetails2.php?product_code=" . urlencode($row['product_code'] ?? '') . "&table_name=" . urlencode($table_name) . "' 
                               class='btn btn-primary btn-sm'>View Product</a>
                          </td>";
                    echo "</tr>";
                    $serial_no++;
                }
            } else {
                echo "<tr><td colspan='5'>No products found.</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No table found for this selection.</td></tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Invalid material selected.</td></tr>";
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .filter-btn, .category-btn {
            background-color: transparent;
            border: 2px solid grey;
            color: grey;
            padding: 6px 12px;
            border-radius: 5px;
            transition: all 0.3s ease;
            margin: 5px;
            cursor: pointer;
        }
        .filter-btn.active, .category-btn.active, .filter-btn:hover, .category-btn:hover {
            background-color: #f5d02a;
            border-color: #f5d02a;
            color: black;
        }
    </style>
</head>
<body>
<div class="container-fluid position-relative d-flex p-0">
    <?php include_once('includes/sidebar.php'); ?>
    <div class="content">
        <?php include_once('includes/topbar.php'); ?>
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h1 class="mb-4" style="color: #f5d02a;">Delist Product</h1>

                        <!-- Filter Buttons -->
                        <div class="mb-3">
                            <button class="filter-btn btn">18K Gold</button>
                            <button class="filter-btn btn">22K Gold</button>
                            <button class="filter-btn btn">18K Diamond</button>
                            <button class="filter-btn btn">Silver</button>
                            <button class="filter-btn btn">Rosegold</button>
                        </div>
                        
                        <!-- Jewelry Categories -->
                        <div class="mt-4">
                            <h6 class="mb-3" style="color: #f5d02a;">Jewelry Categories</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <button class="category-btn btn">Necklaces</button>
                                <button class="category-btn btn">Pendants</button>
                                <button class="category-btn btn">Bracelets</button>
                                <button class="category-btn btn">Bangles</button>
                                <button class="category-btn btn">Rings</button>
                                <button class="category-btn btn">Anklets</button>
                                <button class="category-btn btn">Kadas</button>
                                <button class="category-btn btn">Earrings</button>
                                <button class="category-btn btn">Studs</button>
                                <button class="category-btn btn">Nose Pins</button>
                                <button class="category-btn btn">Chains</button>
                                <button class="category-btn btn">Fancy Chains</button>
                                <button class="category-btn btn">Second Studs</button>
                            </div>
                        </div>

                        <!-- Responsive Table -->
                        <h6 class="mb-4 mt-4" id="selected-heading" style="color: #f5d02a;">Select Material & Category</h6>
                        <div class="table-responsive">
                            <table class="table text-white">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Product Code</th>
                                        <th>Image</th>
                                        <th>Delist</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="productTable">
                                    <tr><td colspan="5">Select a material and category to load products.</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let selectedMaterial = '';
let selectedCategory = '';

document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        selectedMaterial = btn.textContent.trim().toLowerCase();
        updateHeading();
        fetchProducts();
    });
});

document.querySelectorAll('.category-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        selectedCategory = btn.textContent.trim().toLowerCase();
        updateHeading();
        fetchProducts();
    });
});

function updateHeading() {
    const heading = document.getElementById('selected-heading');
    if (selectedMaterial && selectedCategory) {
        heading.textContent = `${selectedMaterial.toUpperCase()} - ${selectedCategory.toUpperCase()}`;
    }
}

function fetchProducts() {
    if (!selectedMaterial || !selectedCategory) return;

    console.log('Fetching products for:', selectedMaterial, selectedCategory);

    const formData = new FormData();
    formData.append('material', selectedMaterial);
    formData.append('category', selectedCategory);

    fetch(window.location.href, { 
        method: 'POST', 
        body: formData 
    })
    .then(res => res.text())
    .then(html => {
        document.getElementById('productTable').innerHTML = html;
        console.log('Products loaded successfully');
    })
    .catch(error => {
        console.error('Error fetching products:', error);
        document.getElementById('productTable').innerHTML = '<tr><td colspan="5">Error loading products</td></tr>';
    });
}

// Improved delist toggle handler with better error handling
document.addEventListener('change', function (e) {
    if (e.target.matches('.toggle-delist')) {
        const id = e.target.dataset.id;
        const table = e.target.dataset.table;
        const delist = e.target.checked ? 1 : 0;

        console.log('Toggle delist:', { id, table, delist });

        const formData = new FormData();
        formData.append('action', 'toggle_delist');
        formData.append('id', id);
        formData.append('table', table);
        formData.append('delist', delist);

        // Disable the checkbox while processing
        e.target.disabled = true;

        fetch(window.location.href, { 
            method: 'POST', 
            body: formData 
        })
        .then(res => {
            console.log('Response status:', res.status);
            return res.json();
        })
        .then(data => {
            console.log('Response data:', data);
            e.target.disabled = false;
            
            if (data.status === 'success') {
                console.log('Update successful');
                // Optional: Show success message
            } else {
                console.error('Update failed:', data.message);
                alert('Failed to update: ' + (data.message || 'Unknown error'));
                e.target.checked = !e.target.checked; // revert if failed
            }
        })
        .catch(error => {
            console.error('Network error:', error);
            e.target.disabled = false;
            alert('Network error occurred: ' + error.message);
            e.target.checked = !e.target.checked;
        });
    }
});
</script>

<?php include_once('includes/footer.php'); ?>
</body>
</html>