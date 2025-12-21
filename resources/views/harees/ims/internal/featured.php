<?php
include_once('includes/header.php');
include_once('../db_connect.php');

// Handle AJAX requests for toggling featured status
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'toggle_featured') {
    $id = intval($_POST['id'] ?? 0);
    $table = preg_replace('/[^a-zA-Z0-9_]/', '', $_POST['table'] ?? '');
    $is_featured = ($_POST['is_featured'] == '1') ? 1 : 0;

    if ($id > 0 && $table) {
        $stmt = $conn->prepare("UPDATE `$table` SET is_featured = ? WHERE id = ?");
        $stmt->bind_param("ii", $is_featured, $id);
        if ($stmt->execute()) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => $stmt->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid input']);
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
            $result = $conn->query("SELECT * FROM `$table_name` ORDER BY id ASC, id ASC");
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['product_code'] ?? '') . "</td>";
                    echo "<td>" . htmlspecialchars($row['name'] ?? '') . "</td>";
                    echo "<td>" . htmlspecialchars($row['stock_quantity'] ?? '') . "</td>";
                    $imgPath = htmlspecialchars($row['img2'] ?? '');
                    $featured = intval($row['is_featured']);
                    echo "<td><img src='$imgPath' width='50'></td>";
                    echo "<td><div class='form-check form-switch'>
                            <input class='form-check-input toggle-featured' type='checkbox' role='switch'
                                data-id='" . htmlspecialchars($row['id']) . "'
                                data-table='" . htmlspecialchars($table_name) . "'
                                " . ($featured ? 'checked' : '') . ">
                        </div></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No products found.</td></tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No table found for this selection.</td></tr>";
        }
    } else {
        echo "<tr><td colspan='6'>Invalid material selected.</td></tr>";
    }
    exit;
}
?>

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
<h1 class="mb-4" style="color: #f5d02a;">Featured Product</h1>

<!-- Filter Buttons -->
                        <div class="mb-3">
                            <button class="filter-btn btn">18K Gold</button>
                            <button class="filter-btn btn">22K Gold</button>
                            <button class="filter-btn btn">Diamond</button>
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
                                <button class="category-btn btn">Kada</button>
                                <button class="category-btn btn">Earrings</button>
                                <button class="category-btn btn">Studs</button>
                                <button class="category-btn btn">Nose Pins</button>
                                <button class="category-btn btn">Chains</button>
                                <button class="category-btn btn">Fancy Chain</button>
                                <button class="category-btn btn">Second Studs</button>
                            </div>
                        </div>



                        <!-- Responsive Table -->
                        <h6 class="mb-4 mt-4" id="selected-heading" style="color: #f5d02a;">Select Material & Category</h6>
                        <div class="table-responsive">
                            

<table class="table text-white">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Code</th>
            <th>Name</th>
            <th>Stock</th>
            <th>Image</th>
            <th>Featured</th>
        </tr>
    </thead>
    <tbody id="productTable">
        <tr><td colspan="6">Select a material and category to load products.</td></tr>
    </tbody>
</table>
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
        fetchProducts();
    });
});

document.querySelectorAll('.category-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        selectedCategory = btn.textContent.trim().toLowerCase();
        fetchProducts();
    });
});

function fetchProducts() {
    if (!selectedMaterial || !selectedCategory) return;

    const formData = new FormData();
    formData.append('material', selectedMaterial);
    formData.append('category', selectedCategory);

    fetch('', { method: 'POST', body: formData })
        .then(res => res.text())
        .then(html => {
            document.getElementById('productTable').innerHTML = html;
        });
}

document.addEventListener('change', function (e) {
    if (e.target.matches('.featured-toggle')) {
        const id = e.target.dataset.id;
        const table = e.target.dataset.table;
        const isFeatured = e.target.checked ? 1 : 0;

        const formData = new FormData();
        formData.append('action', 'toggle_featured');
        formData.append('id', id);
        formData.append('table', table);
        formData.append('is_featured', isFeatured);

        fetch('', { method: 'POST', body: formData })
            .then(res => res.json())
            .then(data => {
                if (data.status !== 'success') {
                    alert('Failed to update: ' + (data.message || 'Unknown error'));
                    e.target.checked = !e.target.checked; // revert if failed
                }
            })
            .catch(() => {
                alert('Network error');
                e.target.checked = !e.target.checked;
            });
    }
});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('change', '.toggle-featured', function() {
    const checkbox = $(this);
    const id = checkbox.data('id');
    const table = checkbox.data('table');
    const is_featured = checkbox.is(':checked') ? 1 : 0;

    $.ajax({
        url: '',  // Same page
        method: 'POST',
        data: {
            action: 'toggle_featured',
            id: id,
            table: table,
            is_featured: is_featured
        },
        success: function(response) {
            try {
                const res = JSON.parse(response);
                if (res.status !== 'success') {
                    alert('Error: ' + (res.message || 'Unknown error'));
                }
            } catch (e) {
                // alert('Invalid response from server.');
            }
        },
        error: function() {
            alert('Failed to communicate with server.');
        }
    });
});
</script>



<?php include_once('includes/footer.php'); ?>