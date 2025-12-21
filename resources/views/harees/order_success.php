<?php
session_start();
include('includes/dbconnect.php');

if (isset($_SESSION['userid'])) {
    include('includes/uhead.php');
} else {
    include('includes/head.php');
    include('includes/header.php');
    include('includes/navbar.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-8">
        <div class="bg-white rounded-lg shadow-sm p-12 text-center">
            <div class="text-6xl mb-4 text-green-500">✓</div>
            <h2 class="text-2xl font-semibold text-gray-700 mb-2">Order Placed Successfully!</h2>
            <p class="text-gray-500 mb-6">Thank you for your order. Your order details have been sent to your email.</p>
            
            <div class="flex justify-center gap-4">
                <a href="index" class="bg-yellow-400 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Continue Shopping
                </a>
                <a href="order_history" class="bg-dark-blue hover:bg-navy text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    View Order History
                </a>
            </div>
        </div>
    </div>
    
    <?php include('includes/footer.php'); ?>
</body>
</html>