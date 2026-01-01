<?php
include_once('includes/header.php');
include_once('../db_connect.php'); // Make sure this path is correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderId = intval($_POST['order_id']);
    $newStatus = intval($_POST['new_status']);

    $query = "UPDATE customer_orders SET status = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'ii', $newStatus, $orderId);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
    }
}

$statusMap = [
    0 => 'new',
    1 => 'processing',
    2 => 'shipped',
    3 => 'delivered',
];

// Define status labels
$statusLabels = [
    'new' => 'New',
    'processing' => 'Processing',
    'shipped' => 'Shipped',
    'delivered' => 'Delivered',
];

// Fetch orders from database
$where = [];
$params = [];

if (!empty($_GET['date'])) {
    $date = $_GET['date'];
    $where[] = "DATE(o.created_at) = '" . mysqli_real_escape_string($conn, $date) . "'";
}

if (!empty($_GET['status']) && isset($statusLabels[$_GET['status']])) {
    $statusInt = array_search($_GET['status'], $statusMap); // Reverse map
    if ($statusInt !== false) {
        $where[] = "o.status = " . intval($statusInt);
    }
}

if (!empty($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $where[] = "(o.id LIKE '%$search%' OR o.fullname LIKE '%$search%' OR o.email LIKE '%$search%')";
}

$whereSQL = !empty($where) ? 'WHERE ' . implode(' AND ', $where) : '';

$query = "
    SELECT o.*, o.fullname AS customer_name, o.email AS customer_email,
           GROUP_CONCAT(oi.product_code SEPARATOR ', ') as product_codes,
           COUNT(oi.id) as item_count
    FROM customer_orders o 
    LEFT JOIN customer_order_items oi ON o.id = oi.order_id
    $whereSQL
    GROUP BY o.id
    ORDER BY o.status, o.created_at DESC
";

$result = mysqli_query($conn, $query);

$filteredOrders = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $statusKey = isset($statusMap[$row['status']]) ? $statusMap[$row['status']] : 'unknown';
        $row['status_key'] = $statusKey;
        $filteredOrders[] = $row;
    }
}

$statusCounts = [];
foreach ($filteredOrders as $order) {
    $key = $order['status_key'];
    if (!isset($statusCounts[$key])) {
        $statusCounts[$key] = 0;
    }
    $statusCounts[$key]++;
}

?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <?php include_once('includes/sidebar.php'); ?>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include_once('includes/topbar.php'); ?>
            <!-- Navbar End -->

            <style>
                .orders-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                    gap: 10px;
                }

                .orders-header h2 {
                    font-size: 24px;
                    font-weight: 600;
                    margin: 0;
                }

                .status-badges {
                    display: flex;
                    gap: 12px;
                    flex-wrap: wrap;
                }

                .badge {
                    padding: 6px 18px;
                    border-radius: 50px;
                    font-weight: 600;
                    font-size: 14px;
                    color: white;
                }

                .badge.green {
                    background-color: #22c55e;
                }

                .badge.blue {
                    background-color: #06b6d4;
                }

                .badge.orange {
                    background-color: #f97316;
                }

                .badge.purple {
                    background-color: #8b5cf6;
                }

                .filter-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                    gap: 16px;
                    align-items: end;
                    margin-top: 20px;
                }

                .form-group label {
                    display: block;
                    margin-bottom: 6px;
                    font-size: 14px;
                    color: #e5e7eb;
                }

                .form-group input,
                .form-group select {
                    width: 100%;
                    padding: 10px 14px;
                    border: 1px solid #4b5563;
                    border-radius: 8px;
                    background-color: #1e1f29;
                    color: white;
                    font-size: 14px;
                }

                .button-group {
                    display: flex;
                    gap: 10px;
                }

                .btns {
                    padding: 10px 20px;
                    font-weight: 600;
                    border: none;
                    border-radius: 8px;
                    cursor: pointer;
                    font-size: 14px;
                }

                .btns.apply {
                    background-color: #facc15;
                    color: black;
                }

                .btns.clear {
                    background-color: #6b7280;
                    color: white;
                }

                .orders-table {
                    width: 100%;
                    border-collapse: collapse;
                    background: #343a40;
                    border-radius: 8px;
                    overflow: hidden;
                }

                .orders-table th,
                .orders-table td {
                    padding: 1rem;
                    color: #ffffff;
                    text-align: left;
                    border-bottom: 1px solid #495057;
                }

                .orders-table thead {
                    background: #495057;
                }

                .order-id {
                    font-weight: 600;
                    color: #ffc107;
                }

                .product-code {
                    background: #17a2b8;
                    color: #ffffff;
                    padding: 0.3rem 0.6rem;
                    border-radius: 4px;
                    font-family: monospace;
                    font-size: 0.85rem;
                }

                .customer-info {
                    display: flex;
                    flex-direction: column;
                    gap: 0.2rem;
                }

                .status-badge {
                    padding: 0.4rem 0.8rem;
                    border-radius: 20px;
                    font-size: 0.8rem;
                    font-weight: 600;
                    text-transform: uppercase;
                    white-space: nowrap;
                }

                .status-new {
                    background: #28a745;
                    color: #fff;
                }

                .status-processing {
                    background: #17a2b8;
                    color: #fff;
                }

                .status-shipped {
                    background: #fd7e14;
                    color: #fff;
                }

                .status-delivered {
                    background: #6f42c1;
                    color: #fff;
                }

                .action-select {
                    padding: 0.4rem 0.6rem;
                    border: 1px solid #495057;
                    border-radius: 4px;
                    background: #2a2d3a;
                    color: #ffffff;
                    font-size: 0.85rem;
                    cursor: pointer;
                    min-width: 120px;
                }

                .no-orders {
                    text-align: center;
                    padding: 2rem 2rem;
                }

                .no-orders i {
                    font-size: 3rem;
                }

                @media (max-width: 768px) {
                    .orders-header {
                        flex-direction: column;
                        align-items: flex-start;
                    }

                    .button-group {
                        flex-direction: column;
                        width: 100%;
                    }

                    .btns {
                        width: 100%;
                    }

                    .orders-table {
                        font-size: 0.85rem;
                    }

                    .orders-table th,
                    .orders-table td {
                        padding: 0.6rem;
                    }

                    .responsive-table-wrapper {
                        width: 100%;
                        overflow-x: auto;
                        -webkit-overflow-scrolling: touch;
                    }

                    .orders-table {
                        min-width: 600px;
                    }
                }
            </style>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-12">
                        <div class="row bg-secondary rounded align-items-center justify-content-center mx-0">
                            <div class="orders-header" style="margin-top: 24px;">
                                <h2>Orders Management</h2>
                                <div class="status-badges">
                                    <?php foreach ($statusCounts as $key => $count): ?>
                                        <?php
                                        $class = match ($key) {
                                            'new' => 'green',
                                            'processing' => 'blue',
                                            'shipped' => 'orange',
                                            'delivered' => 'purple',
                                            default => 'gray'
                                        };
                                        ?>
                                        <div class="badge <?php echo $class; ?>">
                                            <?php echo ucfirst($key); ?>: <?php echo $count; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <form method="GET" action="">
                                <div class="filter-grid mb-4">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" name="date" value="<?php echo htmlspecialchars($_GET['date'] ?? ''); ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status">
                                            <option value="">All Status</option>
                                            <?php foreach ($statusLabels as $key => $label): ?>
                                                <option value="<?php echo $key; ?>" <?php echo (($_GET['status'] ?? '') == $key) ? 'selected' : ''; ?>>
                                                    <?php echo $label; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Search</label>
                                        <input type="text" name="search" placeholder="Order ID, Product Code, Customer..." value="<?php echo htmlspecialchars($_GET['search'] ?? ''); ?>" />
                                    </div>
                                    <div class="button-group">
                                        <button type="submit" class="btns apply">Apply Filters</button>
                                        <a href="?" class="btns clear">Clear All</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Orders Table -->
            <div class="container-fluid pt-4 px-4">
                <div class="row bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="mx-4 my-4 px-4">
                        <div class="responsive-table-wrapper">
                            <table class="orders-table">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Product Code</th>
                                        <th>Customer</th>
                                        <th>Order Date</th>
                                        <th>Price</th>
                                        <!-- <th>Amount</th> -->
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <?php if (empty($filteredOrders)): ?>
                                    <tr>
                                        <td colspan="6" class="no-orders text-center py-4">
                                            <i class="bi bi-inbox"></i>
                                            <div>No orders found for the selected criteria</div>
                                            <small>Try adjusting your filters or search terms</small>
                                        </td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($filteredOrders as $order): ?>
                                        <tr>
                                            <td class="order-id"><?php echo $order['id']; ?></td>
                                            <td>
                                                <?php if (!empty($order['product_codes'])): ?>
                                                    <code class="product-code"><?php echo htmlspecialchars($order['product_codes']); ?></code>
                                                    <?php if ($order['item_count'] > 1): ?>
                                                        <small class="text-muted">(<?php echo $order['item_count']; ?> items)</small>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <span class="text-muted">No items</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="customer-info">
                                                    <div class="customer-name"><?php echo htmlspecialchars($order['customer_name']); ?></div>
                                                    <div class="customer-email"><?php echo htmlspecialchars($order['customer_email']); ?></div>
                                                </div>
                                            </td>
                                            <td class="order-date">
                                                <?php echo date('F j, Y \a\t g:i A', strtotime($order['created_at'])); ?>
                                            </td>
                                            <td><?php echo $order['final_amount']; ?></td>
                                            <td>
                                                <span class="status-badge status-<?php echo $order['status_key']; ?>">
                                                    <?php echo $statusLabels[$order['status_key']] ?? 'Unknown'; ?>
                                                </span>
                                            </td>
                                            <td>
                                                <select class="action-select" onchange="updateOrderStatus('<?php echo $order['id']; ?>', this.value)">
                                                    <?php foreach ($statusMap as $intVal => $statusKey): ?>
                                                        <option value="<?php echo $intVal; ?>" <?php echo ($intVal == $order['status']) ? 'selected' : ''; ?>>
                                                            <?php echo $statusLabels[$statusKey]; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Start -->
            <?php include_once('includes/footer.php'); ?>
            <!-- Footer End -->
        </div>
    </div>

    <!-- Spinner hide after load -->
    <script>
        window.addEventListener('load', function() {
            const spinner = document.getElementById('spinner');
            if (spinner) {
                spinner.classList.remove('show');
            }
        });
    </script>

    <script>
        // setInterval(function () {
        //     location.reload();
        // }, 20000);
    </script>

    <script>
        function updateOrderStatus(orderId, newStatus) {
            // if (!confirm("Are you sure you want to update the status?")) {
            //     return; 
            // }

            fetch('update_order_status.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `order_id=${orderId}&new_status=${newStatus}`
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Order status updated successfully!");
                        location.reload(); // reload the page to reflect changes
                    } else {
                        alert("Failed to update status: " + (data.error || 'Unknown error'));
                    }
                })
                .catch(error => {
                    console.error('Request failed:', error);
                    alert('Network error occurred. Please try again.');
                });
        }
    </script>


</body>