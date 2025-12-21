<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: sign-in");
    exit();
}
include('includes/dbconnect.php');

// Get scheme ID from URL
$scheme_id = isset($_GET['scheme_id']) ? intval($_GET['scheme_id']) : 0;

// Fetch scheme details
$scheme_query = "SELECT * FROM user_schemes WHERE id = $scheme_id AND user_id = '{$_SESSION['userid']}'";
$scheme_result = mysqli_query($conn, $scheme_query);
$scheme = mysqli_fetch_assoc($scheme_result);

if (!$scheme) {
    $_SESSION['error'] = "Invalid scheme selected";
    header("Location: umyschemes");
    exit();
}

// Check if current month already paid
$current_month = date('m');
$current_year = date('Y');
$payment_check = "SELECT * FROM scheme_payments 
                 WHERE user_id = '{$_SESSION['userid']}' 
                 AND scheme_id = $scheme_id
                 AND MONTH(payment_date) = $current_month 
                 AND YEAR(payment_date) = $current_year";
$payment_result = mysqli_query($conn, $payment_check);

if (mysqli_num_rows($payment_result) > 0) {
    $_SESSION['error'] = "This month's payment already recorded";
    header("Location: umyschemes");
    exit();
}

// Process payment if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $scheme['monthly_amount'];
    $receipt_no = 'RCPT-' . strtoupper(uniqid());
    
    $insert_query = "INSERT INTO scheme_payments 
                    (user_id, scheme_id, amount, payment_date, receipt_no) 
                    VALUES 
                    ('{$_SESSION['userid']}', $scheme_id, $amount, NOW(), '$receipt_no')";
    
    if (mysqli_query($conn, $insert_query)) {
        // Update months completed
        $update_query = "UPDATE user_schemes 
                        SET months_completed = months_completed + 1 
                        WHERE id = $scheme_id";
        mysqli_query($conn, $update_query);
        
        // Check if this payment completes the scheme (11 months)
        $check_completion_query = "SELECT months_completed FROM user_schemes WHERE id = $scheme_id";
        $completion_result = mysqli_query($conn, $check_completion_query);
        $scheme_data = mysqli_fetch_assoc($completion_result);
        
        if ($scheme_data['months_completed'] >= 11) {
            $complete_query = "UPDATE user_schemes SET status = 'completed' WHERE id = $scheme_id";
            mysqli_query($conn, $complete_query);
            
            $_SESSION['msg'] = "Congratulations! You've completed your gold scheme and earned your bonus! Download the page from history and contact our shop";
        } else {
            $_SESSION['msg'] = "Payment of ₹$amount successfully recorded!";
        }
        
        header("Location: umyschemes");
        exit();
    } else {
        $_SESSION['error'] = "Error recording payment: " . mysqli_error($conn);
        header("Location: upayment?scheme_id=$scheme_id");
        exit();
    }
}

include('includes/uhead.php');
?>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen">
    <main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto">
            <!-- Payment Form -->
            <div class="bg-white/90 backdrop-blur-sm rounded-xl shadow-lg border-2 border-golden/50 p-6 animate-fade-in">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rupee-sign text-dark-blue text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-navy">Make Payment</h2>
                    <p class="text-gray-600">Complete your monthly installment</p>
                </div>

                <?php if (isset($_SESSION['error'])): ?>
                    <div class="mb-6 p-4 bg-gradient-to-r from-red-100 to-amber-100 border-2 border-red-500 text-dark-blue rounded-xl shadow-lg animate-slide-up">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                            <span class="font-medium"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></span>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Payment Summary -->
                <div class="space-y-4 mb-8">
                    <div class="flex justify-between items-center pb-2 border-b border-golden/20">
                        <span class="text-gray-600">Scheme Type:</span>
                        <span class="font-semibold text-navy">Scheme <?php echo $scheme['scheme_type']; ?></span>
                    </div>
                    <div class="flex justify-between items-center pb-2 border-b border-golden/20">
                        <span class="text-gray-600">Monthly Amount:</span>
                        <span class="font-semibold text-navy">₹<?php echo $scheme['monthly_amount']; ?></span>
                    </div>
                    <div class="flex justify-between items-center pb-2 border-b border-golden/20">
                        <span class="text-gray-600">Payment Month:</span>
                        <span class="font-semibold text-navy"><?php echo date('F Y'); ?></span>
                    </div>
                </div>

                <!-- Payment Options -->
                <form method="POST" class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Payment Method</label>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 p-3 border border-golden/30 rounded-lg hover:bg-amber-50 cursor-pointer">
                                <input type="radio" id="cash" name="payment_method" value="cash" class="text-golden focus:ring-golden" checked>
                                <label for="cash" class="flex items-center gap-2 w-full cursor-pointer">
                                    <i class="fas fa-money-bill-wave text-golden"></i>
                                    <span>Cash Payment</span>
                                </label>
                            </div>
                            <div class="flex items-center gap-3 p-3 border border-golden/30 rounded-lg hover:bg-amber-50 cursor-pointer">
                                <input type="radio" id="online" name="payment_method" value="online" class="text-golden focus:ring-golden">
                                <label for="online" class="flex items-center gap-2 w-full cursor-pointer">
                                    <i class="fas fa-mobile-screen text-golden"></i>
                                    <span>UPI Payment</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full bg-gradient-to-r from-dark-blue to-navy text-white px-6 py-3 rounded-xl hover:from-navy hover:to-dark-blue transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center gap-2">
                            <i class="fas fa-check-circle"></i>
                            Confirm Payment of ₹<?php echo $scheme['monthly_amount']; ?>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Payment Instructions -->
            <div class="mt-8 bg-white/90 backdrop-blur-sm rounded-xl shadow-lg border border-golden/20 p-6">
                <h3 class="font-bold text-navy mb-4 flex items-center gap-2">
                    <i class="fas fa-info-circle text-golden"></i>
                    Payment Instructions
                </h3>
                <ul class="space-y-3 text-sm text-gray-600">
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check text-golden mt-1"></i>
                        <span>Payments must be made before the 10th of each month</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check text-golden mt-1"></i>
                        <span>For cash payments, visit any Harees Gold showroom</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check text-golden mt-1"></i>
                        <span>For UPI payments, use the QR code displayed at our showrooms</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check text-golden mt-1"></i>
                        <span>Always collect your receipt after payment</span>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>