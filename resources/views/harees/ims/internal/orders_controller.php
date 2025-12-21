<?php
// orders_controller.php
include_once("../db_connect.php");


class OrdersController {
    private $conn;
    
    public function __construct($connection) {
        $this->conn = $connection;
    }
    
    public function getAllOrders($limit = 50, $offset = 0) {
        try {
            $sql = "SELECT 
                        id,
                        userid,
                        productid,
                        created_at,
                        product_code,
                        table_name,
                        status,
                        CASE 
                            WHEN status = 0 THEN 'Pending'
                            WHEN status = 1 THEN 'Processing'
                            WHEN status = 2 THEN 'Completed'
                            WHEN status = 3 THEN 'Cancelled'
                            ELSE 'Unknown'
                        END as status_text
                    FROM orders 
                    ORDER BY created_at DESC 
                    LIMIT ? OFFSET ?";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ii", $limit, $offset);
            $stmt->execute();
            $result = $stmt->get_result();
            
            $orders = [];
            while ($row = $result->fetch_assoc()) {
                $orders[] = $row;
            }
            
            return $orders;
        } catch (Exception $e) {
            error_log("Error fetching orders: " . $e->getMessage());
            return [];
        }
    }
    
    public function getOrdersByStatus($status, $limit = 50, $offset = 0) {
        try {
            $sql = "SELECT 
                        id,
                        userid,
                        productid,
                        created_at,
                        product_code,
                        table_name,
                        status,
                        CASE 
                            WHEN status = 0 THEN 'Pending'
                            WHEN status = 1 THEN 'Processing'
                            WHEN status = 2 THEN 'Completed'
                            WHEN status = 3 THEN 'Cancelled'
                            ELSE 'Unknown'
                        END as status_text
                    FROM orders 
                    WHERE status = ?
                    ORDER BY created_at DESC 
                    LIMIT ? OFFSET ?";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("iii", $status, $limit, $offset);
            $stmt->execute();
            $result = $stmt->get_result();
            
            $orders = [];
            while ($row = $result->fetch_assoc()) {
                $orders[] = $row;
            }
            
            return $orders;
        } catch (Exception $e) {
            error_log("Error fetching orders by status: " . $e->getMessage());
            return [];
        }
    }
    
    public function updateOrderStatus($orderId, $newStatus) {
        try {
            $sql = "UPDATE orders SET status = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ii", $newStatus, $orderId);
            
            if ($stmt->execute()) {
                return ['success' => true, 'message' => 'Order status updated successfully'];
            } else {
                return ['success' => false, 'message' => 'Failed to update order status'];
            }
        } catch (Exception $e) {
            error_log("Error updating order status: " . $e->getMessage());
            return ['success' => false, 'message' => 'Database error occurred'];
        }
    }
    
    public function getOrdersCount($status = null) {
        try {
            if ($status !== null) {
                $sql = "SELECT COUNT(*) as total FROM orders WHERE status = ?";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("i", $status);
            } else {
                $sql = "SELECT COUNT(*) as total FROM orders";
                $stmt = $this->conn->prepare($sql);
            }
            
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            
            return $row['total'];
        } catch (Exception $e) {
            error_log("Error getting orders count: " . $e->getMessage());
            return 0;
        }
    }
    
    public function getNewOrdersCount() {
        // Assuming status 0 means new/pending orders
        return $this->getOrdersCount(0);
    }
    
    public function searchOrders($searchTerm, $limit = 50, $offset = 0) {
        try {
            $searchTerm = '%' . $searchTerm . '%';
            $sql = "SELECT 
                        id,
                        userid,
                        productid,
                        created_at,
                        product_code,
                        table_name,
                        status,
                        CASE 
                            WHEN status = 0 THEN 'Pending'
                            WHEN status = 1 THEN 'Processing'
                            WHEN status = 2 THEN 'Completed'
                            WHEN status = 3 THEN 'Cancelled'
                            ELSE 'Unknown'
                        END as status_text
                    FROM orders 
                    WHERE product_code LIKE ? 
                       OR table_name LIKE ? 
                       OR userid LIKE ?
                    ORDER BY created_at DESC 
                    LIMIT ? OFFSET ?";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sssii", $searchTerm, $searchTerm, $searchTerm, $limit, $offset);
            $stmt->execute();
            $result = $stmt->get_result();
            
            $orders = [];
            while ($row = $result->fetch_assoc()) {
                $orders[] = $row;
            }
            
            return $orders;
        } catch (Exception $e) {
            error_log("Error searching orders: " . $e->getMessage());
            return [];
        }
    }
}

// Handle AJAX requests
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $ordersController = new OrdersController($conn);
    
    switch ($_POST['action']) {
        case 'update_status':
            $orderId = intval($_POST['order_id']);
            $newStatus = intval($_POST['new_status']);
            $result = $ordersController->updateOrderStatus($orderId, $newStatus);
            
            header('Content-Type: application/json');
            echo json_encode($result);
            exit;
            
        case 'get_orders':
            $status = isset($_POST['status']) ? intval($_POST['status']) : null;
            $search = isset($_POST['search']) ? $_POST['search'] : '';
            $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
            $limit = 20;
            $offset = ($page - 1) * $limit;
            
            if (!empty($search)) {
                $orders = $ordersController->searchOrders($search, $limit, $offset);
            } elseif ($status !== null) {
                $orders = $ordersController->getOrdersByStatus($status, $limit, $offset);
            } else {
                $orders = $ordersController->getAllOrders($limit, $offset);
            }
            
            header('Content-Type: application/json');
            echo json_encode($orders);
            exit;
    }
}

// Initialize controller for page load
$ordersController = new OrdersController($conn);
$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
$statusFilter = isset($_GET['status']) ? intval($_GET['status']) : null;
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$limit = 20;
$offset = ($currentPage - 1) * $limit;

// Get orders based on filters
if (!empty($searchTerm)) {
    $orders = $ordersController->searchOrders($searchTerm, $limit, $offset);
    $totalOrders = count($ordersController->searchOrders($searchTerm, 1000, 0)); // Get total for pagination
} elseif ($statusFilter !== null) {
    $orders = $ordersController->getOrdersByStatus($statusFilter, $limit, $offset);
    $totalOrders = $ordersController->getOrdersCount($statusFilter);
} else {
    $orders = $ordersController->getAllOrders($limit, $offset);
    $totalOrders = $ordersController->getOrdersCount();
}

$totalPages = ceil($totalOrders / $limit);
$newOrdersCount = $ordersController->getNewOrdersCount();
?>

    
<!-- 
=============================================================================================================        
                                              CHANGABLE AREA ENDS HERE  
=============================================================================================================
-->
    </div>
</div>
            <!-- Footer Start -->
            <?php include_once("includes/footer-new.php"); ?>
            <!-- Footer End -->

            </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php include_once("includes/js-libraries.php"); ?>

    </body>
</html>