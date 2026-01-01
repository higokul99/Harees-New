<?php
// Ensure no whitespace or characters before this PHP tag.
ob_start(); // Start output buffering at the very beginning of the script.

// Include the database connection function from ../db_connect.php.
// Include the database connection function from ../db_connect.php.
// This file MUST establish the getDbConnection() function.
include_once('../db_connect.php');

// Get the database connection using the function
// $conn = getDbConnection(); // db_connect.php creates $conn directly


// If connection failed, handle the error gracefully
if ($conn === null) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // For AJAX requests, send a JSON error response
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Database connection failed. Check server logs.']);
        ob_end_clean(); // Discard any buffered output
        exit();
    } else {
        // For direct page load, display an HTML error and exit
        ob_end_clean(); // Discard any buffered output
        die("<!DOCTYPE html><html><head><title>Error</title><style>body{font-family:sans-serif;background-color:#f8d7da;color:#721c24;padding:20px;border:1px solid #f5c6cb;border-radius:5px;}</style></head><body><h1>Database Connection Error</h1><p>Could not connect to the database. Please check your `db_connect.php` file and server logs for details.</p></body></html>");
    }
}

// --- API Logic for Product Management (Handles AJAX POST requests) ---
// This block must be at the very top, after connection, but before any HTML output.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // If headers have already been sent (due to prior output), log an error.
    if (headers_sent()) {
        error_log("Headers already sent before JSON output in viewproducts.php API call.");
        // Attempt to clear any buffered output before sending JSON
        ob_clean();
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Internal server error: Output started before JSON response.']);
        exit();
    }
    header('Content-Type: application/json'); // Set the Content-Type header immediately for all POST requests in this file

    // Handle toggle_delist action
    if (isset($_POST['action']) && $_POST['action'] === 'toggle_delist') {
        toggleDelistStatus($conn);
        $conn->close(); // Close connection after API call
        ob_end_clean(); // Discard any buffered output for this API call
        exit(); // Crucial: exit after sending JSON response
    }
    // Handle fetching products based on material and category
    elseif (isset($_POST['material']) && isset($_POST['category'])) {
        getProductsFiltered($conn);
        $conn->close(); // Close connection after API call
        ob_end_clean(); // Discard any buffered output for this API call
        exit(); // Crucial: exit after sending JSON response
    }
    // If no valid action for POST, return error (should be handled by client-side logic)
    echo json_encode(['status' => 'error', 'message' => 'Invalid POST action or missing parameters.']);
    $conn->close();
    ob_end_clean(); // Discard any buffered output
    exit();
}

/**
 * Fetches products based on material and category.
 * Returns JSON array of products.
 * @param mysqli $conn The database connection object.
 */
function getProductsFiltered($conn)
{
    $material = strtolower(trim($_POST['material']));
    $category = strtolower(trim($_POST['category']));

    // Mapping Material to IDs (based on legacy AddProduct logic)
    $metal_id = null;
    $metal_purity_id = null;

    if (strpos($material, '18k gold') !== false) {
        $metal_id = 1;
        $metal_purity_id = 4;
    } elseif (strpos($material, '22k gold') !== false) {
        $metal_id = 1;
        $metal_purity_id = 5;
    } elseif (strpos($material, 'diamond') !== false) {
        $metal_id = 1;
        $metal_purity_id = 6;
    } elseif (strpos($material, 'silver') !== false) {
        $metal_id = 2;
        // Silver purity? logical default or loose filter
    } elseif (strpos($material, 'rosegold') !== false) {
        // Map rosegold to appropriate IDs
        $metal_id = 1;
        $metal_purity_id = 3; // Based on case 3 in AddProduct2db
    }

    // Fetch Category ID
    $cat_id = null;
    $stmtCat = $conn->prepare("SELECT id FROM categories WHERE lowered_name = ? OR name = ? LIMIT 1");
    // Assuming categories table exists. If not, string match might be hard.
    // Let's assume name column exists.
    $stmtCat->prepare("SELECT id FROM categories WHERE name = ? LIMIT 1");
    $stmtCat->bind_param("s", $category); // Case sensitivity depends on collation
    $stmtCat->execute();
    $stmtCat->bind_result($cat_id);
    $stmtCat->fetch();
    $stmtCat->close();

    // Query Products
    $sql = "SELECT p.id, p.product_code, p.stock_quantity, pi.image_path as img2, p.net_weight, p.price as rate, p.delist 
            FROM products p 
            LEFT JOIN product_images pi ON p.id = pi.product_id AND pi.is_primary = 1
            WHERE 1=1";

    $types = "";
    $params = [];

    if ($metal_id) {
        $sql .= " AND p.metal_id = ?";
        $types .= "i";
        $params[] = $metal_id;
    }
    if ($metal_purity_id) {
        $sql .= " AND p.metal_purity_id = ?";
        $types .= "i";
        $params[] = $metal_purity_id;
    }
    if ($cat_id) {
        $sql .= " AND p.category_id = ?";
        $types .= "i";
        $params[] = $cat_id;
    }

    $sql .= " ORDER BY p.id ASC";

    $stmt = $conn->prepare($sql);
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        // Return table_name as 'products' for consistency in editing
        echo json_encode(['status' => 'success', 'data' => $products, 'table_name' => 'products']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Query failed: ' . $conn->error]);
    }
    $stmt->close();
}

/**
 * Toggles the 'delist' status of a product.
 * @param mysqli $conn The database connection object.
 */
function toggleDelistStatus($conn)
{
    $id = intval($_POST['id'] ?? 0);
    // Sanitize table name (already done in HTML JS, but good to double check)
    $table = preg_replace('/[^a-zA-Z0-9_]/', '', $_POST['table'] ?? '');
    $delist_status = ($_POST['delist_status'] == '1') ? 1 : 0; // Corrected variable name from $delist to $delist_status for consistency

    if ($id > 0 && $table) {
        $stmt = $conn->prepare("UPDATE `$table` SET delist = ? WHERE id = ?");
        if ($stmt === false) {
            echo json_encode(['status' => 'error', 'message' => 'Failed to prepare statement: ' . $conn->error]);
            return;
        }
        $stmt->bind_param("ii", $delist_status, $id);
        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Delist status updated.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update delist status: ' . $stmt->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid input for delist toggle.']);
    }
}

// --- HTML & JavaScript Frontend ---
// This part will only be executed if no API action was requested (initial page load).
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    // End buffering and discard content before redirecting if session is not set
    ob_end_clean();
    echo "<Script>alert('Session Expired! Please login again to Continue');</Script>";
    echo "<script>location.href='../logout.php'</script>";
    exit(); // Exit to prevent the rest of the HTML from loading
}
// If session is active, continue to display HTML (and flush any remaining buffer)
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            /* Light background */
            color: #343a40;
            /* Dark text */
            min-height: 100vh;
        }

        .content-wrapper {
            flex-grow: 1;
            padding: 20px;
            width: 100%;
            /* Ensure it takes full width */
        }

        h1,
        h6 {
            color: #007bff;
            /* Bootstrap primary blue */
            margin-bottom: 20px;
            /* Add some spacing */
        }

        .filter-btn,
        .category-btn {
            background-color: transparent;
            border: 2px solid #ced4da;
            /* Light border */
            color: #495057;
            /* Dark text */
            padding: 8px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
            margin: 5px;
            cursor: pointer;
            font-size: 0.95rem;
        }

        .filter-btn.active,
        .category-btn.active,
        .filter-btn:hover,
        .category-btn:hover {
            background-color: #007bff;
            /* Bootstrap primary blue */
            border-color: #007bff;
            color: white;
            /* White text on active/hover */
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
        }

        .table thead th {
            color: #007bff;
            /* Header text color */
            border-bottom: 2px solid #dee2e6;
            /* Lighter border */
            padding: 12px 10px;
            font-size: 0.9rem;
        }

        .table tbody td {
            color: #495057;
            /* Body text color */
            vertical-align: middle;
            padding: 10px;
            border-top: 1px solid #e9ecef;
            /* Lighter border */
        }

        .table img {
            max-width: 70px;
            /* Slightly smaller image */
            height: auto;
            border-radius: 8px;
            display: block;
            margin: 0 auto;
            border: 1px solid #ced4da;
            /* Lighter image border */
        }

        .form-check-input.toggle-delist {
            width: 2.8em;
            /* Make switch wider */
            height: 1.4em;
            /* Make switch taller */
            margin-top: 0.25em;
            background-color: #28a745;
            /* Green for active (not delisted) */
            border-color: #28a745;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .form-check-input.toggle-delist:checked {
            background-color: #dc3545;
            /* Red for delisted */
            border-color: #dc3545;
        }

        .form-check-input.toggle-delist:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.3);
            /* Blue focus consistent with theme */
        }

        @media (max-width: 992px) {
            .table-responsive {
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table {
                min-width: 900px;
                /* Adjusted min-width for more columns */
            }

            .filter-btn,
            .category-btn {
                font-size: 0.85rem;
                padding: 4px 8px;
            }
        }
    </style>
</head>

<body>
    <div class="content-wrapper" id="contentWrapper">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-12">
                    <h1 class="mb-4 text-center">Product Catalog</h1>

                    <!-- Filter Buttons -->
                    <div class="mb-3 d-flex flex-wrap justify-content-center">
                        <button class="filter-btn btn" data-material="18k gold">18K Gold</button>
                        <button class="filter-btn btn" data-material="22k gold">22K Gold</button>
                        <button class="filter-btn btn" data-material="diamond">Diamond</button>
                        <button class="filter-btn btn" data-material="silver">Silver</button>
                        <button class="filter-btn btn" data-material="rosegold">Rosegold</button>
                    </div>

                    <!-- Jewelry Categories -->
                    <div class="mt-4">
                        <h6 class="mb-3 text-center">Jewelry Categories</h6>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <button class="category-btn btn" data-category="necklaces">Necklaces</button>
                            <button class="category-btn btn" data-category="pendants">Pendants</button>
                            <button class="category-btn btn" data-category="bracelets">Bracelets</button>
                            <button class="category-btn btn" data-category="bangles">Bangles</button>
                            <button class="category-btn btn" data-category="rings">Rings</button>
                            <button class="category-btn btn" data-category="anklets">Anklets</button>
                            <button class="category-btn btn" data-category="kada">Kada</button>
                            <button class="category-btn btn" data-category="earrings">Earrings</button>
                            <button class="category-btn btn" data-category="studs">Studs</button>
                            <button class="category-btn btn" data-category="nose pins">Nose Pins</button>
                            <button class="category-btn btn" data-category="chains">Chains</button>
                            <button class="category-btn btn" data-category="fancy chain">Fancy Chain</button>
                            <button class="category-btn btn" data-category="second studs">Second Studs</button>
                        </div>
                    </div>

                    <!-- Responsive Table -->
                    <h6 class="mb-4 mt-4 text-center" id="selected-heading">Select Material & Category</h6>
                    <div class="table-responsive">
                        <table class="table text-dark table-hover">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Product Code</th>
                                    <th>Image</th>
                                    <th>Net Weight</th>
                                    <th>Rate</th>
                                    <th>Stock</th>
                                    <th>Delist</th>
                                </tr>
                            </thead>
                            <tbody id="productTable">
                                <tr>
                                    <td colspan="7" class="text-center">Select a material and category to load products.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS (bundle includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script>
        let selectedMaterial = '';
        let selectedCategory = '';
        let currentTableName = ''; // To store the table name fetched from PHP

        // Function to escape HTML entities for display, preventing XSS
        function htmlspecialchars(str) {
            if (typeof str !== 'string') return str; // Return non-strings as is
            return str.replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        }

        // Function to call for displaying Rate - add your logic here
        function formatRate(rate) {
            if (rate === null || rate === undefined || rate === '') {
                return 'N/A';
            }
            // Example: Format to 2 decimal places with a currency symbol and commas for thousands
            return '₹' + parseFloat(rate).toLocaleString('en-IN', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
        }

        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                selectedMaterial = btn.dataset.material; // Use data-material attribute
                fetchProducts();
            });
        });

        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                selectedCategory = btn.dataset.category; // Use data-category attribute
                fetchProducts();
            });
        });

        function fetchProducts() {
            const productTableBody = document.getElementById('productTable');
            if (!selectedMaterial || !selectedCategory) {
                productTableBody.innerHTML = `<tr><td colspan='7' class='text-center'>Select both a material and a category to load products.</td></tr>`;
                document.getElementById('selected-heading').textContent = 'Select Material & Category';
                return;
            }

            document.getElementById('selected-heading').textContent = `Loading ${selectedMaterial} - ${selectedCategory} products...`;
            productTableBody.innerHTML = `<tr><td colspan='7' class='text-center'>Loading products...</td></tr>`;

            const formData = new FormData();
            formData.append('material', selectedMaterial);
            formData.append('category', selectedCategory);

            fetch('viewproducts.php', {
                    method: 'POST',
                    body: formData
                })
                .then(res => {
                    if (!res.ok) {
                        // If response is not OK (e.g., 500 Internal Server Error),
                        // try to read it as text to debug potential PHP errors
                        return res.text().then(text => {
                            throw new Error(text);
                        });
                    }
                    return res.json(); // Expect JSON response
                })
                .then(data => {
                    productTableBody.innerHTML = ''; // Clear loading message
                    if (data.status === 'success') {
                        currentTableName = data.table_name; // Store the actual table name
                        document.getElementById('selected-heading').textContent = `Products for ${selectedMaterial} - ${selectedCategory} (Table: ${currentTableName})`;
                        if (data.data.length > 0) {
                            data.data.forEach((product, index) => {
                                const sn = index + 1; // Serial Number
                                const imgPath = product.img2 ? htmlspecialchars(product.img2) : 'https://placehold.co/80x80/cccccc/333333?text=No+Image';
                                const delisted = parseInt(product.delist) === 1; // Convert to boolean for checkbox state

                                const row = `
                            <tr>
                                <td>${sn}</td>
                                <td>${htmlspecialchars(product.product_code || 'N/A')}</td>
                                <td>
                                    <a href="${imgPath}" target="_blank" rel="noopener noreferrer">
                                        <img src="${imgPath}" onerror="this.onerror=null;this.src='https://placehold.co/80x80/cccccc/333333?text=Image+Error';" alt="Product Image">
                                    </a>
                                </td>
                                <td>${htmlspecialchars(product.net_weight || 'N/A')}</td>
                                <td>
                                    ${formatRate(product.rate)}
                                </td>
                                <td>${htmlspecialchars(product.stock_quantity || '0')}</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input toggle-delist" type="checkbox" role="switch"
                                            data-id="${htmlspecialchars(product.id)}"
                                            data-table="${htmlspecialchars(currentTableName)}"
                                            ${delisted ? 'checked' : ''}>
                                    </div>
                                </td>
                            </tr>
                        `;
                                productTableBody.innerHTML += row;
                            });
                        } else {
                            productTableBody.innerHTML = `<tr><td colspan='7' class="text-center">No products found for ${selectedMaterial} - ${selectedCategory}.</td></tr>`;
                        }
                    } else if (data.status === 'info') {
                        document.getElementById('selected-heading').textContent = `Info for ${selectedMaterial} - ${selectedCategory}`;
                        productTableBody.innerHTML = `<tr><td colspan='7' class="text-center">${htmlspecialchars(data.message)}</td></tr>`;
                    } else {
                        document.getElementById('selected-heading').textContent = `Error Loading Products`;
                        productTableBody.innerHTML = `<tr><td colspan='7' class="text-center">Error: ${htmlspecialchars(data.message)}</td></tr>`;
                    }
                })
                .catch(error => {
                    console.error('Error fetching products:', error);
                    document.getElementById('selected-heading').textContent = `Network Error`;
                    // Display the full error message for debugging purposes
                    productTableBody.innerHTML = `<tr><td colspan='7' class="text-center">Network error or server unavailable. Details: ${htmlspecialchars(error.message || error)}</td></tr>`;
                });
        }

        // Event listener for the Delist toggle (using delegation for dynamically added elements)
        $(document).on('change', '.toggle-delist', function() {
            const checkbox = $(this);
            const id = checkbox.data('id');
            const table = checkbox.data('table'); // Use the dynamic table name
            const delist_status = checkbox.is(':checked') ? 1 : 0; // Corrected variable name

            $.ajax({
                url: 'viewproducts.php',
                method: 'POST',
                data: {
                    action: 'toggle_delist',
                    id: id,
                    table: table,
                    delist_status: delist_status // Corrected variable name
                },
                success: function(response) {
                    try {
                        // jQuery's .ajax() often automatically parses JSON if the Content-Type header is correct.
                        // So, 'response' should already be an object here.
                        if (response.status !== 'success') {
                            // Using a simple alert for feedback as per previous instructions
                            alert('Error: ' + (response.message || 'Unknown error'));
                            checkbox.prop('checked', !checkbox.is(':checked')); // revert if failed
                        } else {
                            // Optionally, provide positive feedback
                            // alert(response.message);
                        }
                    } catch (e) {
                        console.error("JSON parsing error:", e, "Response:", response);
                        alert('Invalid response from server.');
                        checkbox.prop('checked', !checkbox.is(':checked'));
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("AJAX Error: ", textStatus, errorThrown, jqXHR.responseText);
                    alert('Failed to communicate with server. Check console for details.');
                    checkbox.prop('checked', !checkbox.is(':checked'));
                }
            });
        });
    </script>
</body>

</html>