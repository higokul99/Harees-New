<?php
// uschemes.php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: sign-in");
    exit();
}
include('includes/dbconnect.php');

// Fetch user's schemes from database
$user_id = $_SESSION['userid'];

$query = "SELECT phone FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);
$phone = mysqli_fetch_assoc($result);

$schemes_query = "SELECT * FROM user_schemes WHERE user_id = '$user_id'";
$schemes_result = mysqli_query($conn, $schemes_query);
$scheme_count = mysqli_num_rows($schemes_result);
?>
<?php include('includes/uhead.php'); ?>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'dark-blue': '#1e3a8a',
                    'darker-blue': '#1e40af',
                    'navy': '#0f172a',
                    'golden': '#fbbf24',
                    'light-golden': '#fcd34d',
                    'rose-gold': '#e0bfb8',
                    'red': '#ef4444',
                },
                animation: {
                    'fade-in': 'fadeIn 0.5s ease-in-out',
                    'slide-up': 'slideUp 0.3s ease-out',
                    'pulse-slow': 'pulse 3s infinite',
                },
                keyframes: {
                    fadeIn: {
                        '0%': { opacity: '0', transform: 'translateY(10px)' },
                        '100%': { opacity: '1', transform: 'translateY(0)' }
                    },
                    slideUp: {
                        '0%': { transform: 'translateY(10px)', opacity: '0' },
                        '100%': { transform: 'translateY(0)', opacity: '1' }
                    }
                }
            }
        }
    }
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen">
    <main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Page Header -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-navy mb-2">My Gold Schemes</h1>
                    <p class="text-gray-600">View and manage your enrolled gold savings schemes</p>
                </div>
                <a href="ugoldscheme" class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-lg hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-3">
                    <i class="fas fa-refresh"></i>
                    History
                </a>
                <a href="ugoldscheme" class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-lg hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-3">
                    <i class="fas fa-plus"></i>
                    Enroll New Scheme
                </a>

            </div>

            <?php if (isset($_SESSION['msg'])): ?>
                <div class="mb-8 p-4 bg-gradient-to-r from-golden/20 to-amber-200/30 border-2 border-golden/30 text-dark-blue rounded-xl shadow-lg animate-slide-up">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-check-circle text-golden text-xl"></i>
                        <span class="font-medium"><?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?></span>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="mb-8 p-4 bg-gradient-to-r from-red-100 to-amber-100 border-2 border-red-500 text-dark-blue rounded-xl shadow-lg animate-slide-up">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                        <span class="font-medium"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></span>
                    </div>
                </div>
            <?php endif; ?>

            <!-- User's Active Schemes -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-4 px-2">
                    <h2 class="text-xl font-bold text-navy">Your Active Schemes</h2>
                    <div class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                        <?php echo $scheme_count; ?> Active Scheme<?php echo $scheme_count != 1 ? 's' : ''; ?>
                    </div>
                </div>
                
                <?php if ($scheme_count > 0): ?>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <?php while($scheme = mysqli_fetch_assoc($schemes_result)): 
                            // Check if current month payment is pending for this scheme
                            $current_month = date('m');
                            $current_year = date('Y');
                            $current_month_name = date('F'); // Full month name (e.g. "July")
                            $payment_query = "SELECT id FROM scheme_payments 
                                            WHERE scheme_id = '{$scheme['id']}' 
                                            AND MONTH(payment_date) = '$current_month' 
                                            AND YEAR(payment_date) = '$current_year'";
                            $payment_result = mysqli_query($conn, $payment_query);
                            $has_payment = mysqli_num_rows($payment_result) > 0;
                            $payment_pending = !$has_payment;
                        ?>
                        <div class="bg-white rounded-xl shadow-md border border-golden/30 hover:border-golden/50 transition-all duration-300 hover:shadow-lg">
                            <div class="p-5">
                                <!-- Header -->
                                <div class="flex justify-between items-start mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center shrink-0">
                                            <i class="fas fa-coins text-dark-blue text-sm"></i>
                                        </div>
                                        <div>
                                            <h2 class="font-bold text-navy">Scheme <?php echo $scheme['scheme_type']; ?></h2>
                                            <p class="text-gray-500 text-xs">Started <?php echo date('d M Y', strtotime($scheme['start_date'])); ?></p>
                                        </div>
                                    </div>
                                    <span class="<?php echo ($scheme['months_completed'] >= 11) ? 'bg-gradient-to-br from-green-600 to-green-700' : 'bg-gradient-to-br from-dark-blue to-navy'; ?> text-white px-2 py-1 rounded-md text-[10px] font-bold leading-none">
                                        <?php echo ($scheme['months_completed'] >= 11) ? 'Completed' : 'Active'; ?>
                                    </span>
                                </div>

                                <!-- Stats Grid -->
                                <div class="grid grid-cols-2 gap-3 mb-4">
                                    <div class="bg-gray-50 rounded-lg p-2 border border-golden/20">
                                        <p class="text-xs font-medium text-gray-500 mb-1">Monthly</p>
                                        <p class="font-semibold text-navy text-sm">₹<?php echo $scheme['monthly_amount']; ?></p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-2 border border-golden/20">
                                        <p class="text-xs font-medium text-gray-500 mb-1">Term</p>
                                        <p class="font-semibold text-navy text-sm">11 Months</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-2 border border-golden/20">
                                        <p class="text-xs font-medium text-gray-500 mb-1">Paid</p>
                                        <p class="font-semibold text-navy text-sm"><?php echo $scheme['months_completed']; ?>/11</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-2 border border-golden/20">
                                        <p class="text-xs font-medium text-gray-500 mb-1">Bonus</p>
                                        <p class="font-semibold text-navy text-sm">₹<?php 
                                            $bonus = 0;
                                            if($scheme['scheme_type'] == 'A') $bonus = 600;
                                            elseif($scheme['scheme_type'] == 'B') $bonus = 1200;
                                            elseif($scheme['scheme_type'] == 'C') $bonus = 2400;
                                            elseif($scheme['scheme_type'] == 'D') $bonus = 3000;
                                            elseif($scheme['scheme_type'] == 'E') $bonus = 6000;
                                            elseif($scheme['scheme_type'] == 'F') $bonus = 12000;
                                            echo $bonus;
                                        ?></p>
                                    </div>
                                </div>

                                <!-- Progress Bar -->
                                <div class="mb-4">
                                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                                        <span>Progress</span>
                                        <span><?php echo round(($scheme['months_completed']/11)*100); ?>%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-gradient-to-r from-golden to-amber-500 h-2 rounded-full" 
                                            style="width: <?php echo round(($scheme['months_completed']/11)*100); ?>%"></div>
                                    </div>
                                </div>

                                <!-- Maturity Value -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-lg p-3 mb-4 border border-golden/20">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-xs font-medium text-gray-500">Maturity Value</p>
                                            <p class="font-semibold text-navy">₹<?php 
                                                $total = $scheme['monthly_amount'] * 11;
                                                echo number_format($total + $bonus);
                                            ?></p>
                                        </div>
                                        <div class="w-8 h-8 bg-gradient-to-br from-golden/20 to-amber-100/20 rounded-full flex items-center justify-center">
                                            <i class="fas fa-gem text-dark-blue text-sm"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Payment/Download Buttons Section -->
                                <div class="flex flex-col gap-3">
                                    <?php if ($payment_pending): ?>
                                        <!-- Pay Now Button (only shows if payment is pending) -->
                                        <a href="upayment?scheme_id=<?php echo $scheme['id']; ?>" 
                                            class="w-full bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-lg hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center gap-3 text-center">
                                                Pay ₹<?php echo $scheme['monthly_amount']; ?> for <?php echo $current_month_name; ?>
                                        </a>
                                    <?php elseif ($scheme['months_completed'] >= 11): ?>
                                        <!-- Download Passbook Button (only shows when scheme is completed) -->
                                        <a href="download_passbook.php?scheme_id=<?php echo $scheme['id']; ?>" 
                                            class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-lg hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-3">
                                                <i class="fas fa-download"></i> Download Passbook
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <div class="bg-white rounded-xl shadow-md border border-golden/30 p-6 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-gray-100 to-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-coins text-gray-400 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-700 mb-2">No Active Schemes</h3>
                        <p class="text-gray-500 text-sm mb-4">Start your gold savings journey today</p>
                        <a href="ugoldscheme" class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-medium px-5 py-2 rounded-lg hover:from-amber-400 hover:to-golden transition-all duration-300 inline-flex items-center gap-2 text-sm">
                            <i class="fas fa-plus"></i>
                            Enroll Now
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Scheme Passbook Section -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden border border-golden/30 animate-fade-in">
                <div class="bg-gradient-to-r from-dark-blue to-navy p-4 text-white">
                    <h2 class="text-xl font-bold flex items-center gap-3">
                        <i class="fas fa-book text-golden"></i>
                        GOLD FUND PASS BOOK
                    </h2>
                </div>

                <div class="p-6">
                    <!-- User Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="space-y-4">
                            <div class="border-b border-golden/20 pb-2">
                                <p class="text-xs font-medium text-gray-500">SCHEME No</p>
                                <p class="font-medium text-navy">
                                    <?php 
                                    if ($scheme_count > 0) {
                                        // Generate a persistent scheme number based on user ID and scheme details
                                        $scheme_number = 'GS-' . strtoupper(substr(md5($user_id), 0, 4)) . '-' . str_pad($user_id, 4, '0', STR_PAD_LEFT);
                                        echo $scheme_number;
                                    } else {
                                        echo 'N/A';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="border-b border-golden/20 pb-2">
                                <p class="text-xs font-medium text-gray-500">A/c No</p>
                                <p class="font-medium text-navy"><?php echo $_SESSION['userid'] ?? 'N/A'; ?></p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="border-b border-golden/20 pb-2">
                                <p class="text-xs font-medium text-gray-500">Name</p>
                                <p class="font-medium text-navy"><?php echo $_SESSION['username'] ?? 'Guest User'; ?></p>
                            </div>
                            
                            <div class="border-b border-golden/20 pb-2">
                                <p class="text-xs font-medium text-gray-500">Phone No</p>
                                <p class="font-medium text-navy"><?php echo $phone['phone'] ?? 'N/A'; ?></p>
                            </div>
                        </div>
                    </div>

                    <?php if ($scheme_count > 0): ?>
                        <!-- Payment History Table -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-golden/20">
                                <thead class="bg-gradient-to-r from-dark-blue/10 to-navy/10">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sr No</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Receipt No</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Installment</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Amt</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-golden/10">
                                    <?php
                                    // Get current month/year and active scheme
                                    $current_month = date('m');
                                    $current_year = date('Y');
                                    $active_scheme = null;
                                    
                                    if ($scheme_count > 0) {
                                        $scheme_query = "SELECT * FROM user_schemes WHERE user_id = '$user_id' AND status = 'active' LIMIT 1";
                                        $scheme_result = mysqli_query($conn, $scheme_query);
                                        $active_scheme = mysqli_fetch_assoc($scheme_result);
                                    }
                                    
                                    // Check if current month is paid
                                    $current_month_paid = false;
                                    $payments_query = "SELECT * FROM scheme_payments WHERE user_id = '$user_id' ORDER BY payment_date DESC";
                                    $payments_result = mysqli_query($conn, $payments_query);
                                    $payment_count = mysqli_num_rows($payments_result);
                                    
                                    // Calculate running total
                                    $total_paid = 0;
                                    $sr_no = 1;
                                    
                                    // Display paid payments
                                    if ($payment_count > 0) {
                                        while($payment = mysqli_fetch_assoc($payments_result)) {
                                            $payment_month = date('m', strtotime($payment['payment_date']));
                                            $payment_year = date('Y', strtotime($payment['payment_date']));
                                            
                                            // Check if this is current month's payment
                                            if ($payment_month == $current_month && $payment_year == $current_year) {
                                                $current_month_paid = true;
                                            }
                                            
                                            $total_paid += $payment['amount'];
                                            ?>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-navy"><?= $sr_no++; ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                    <?= date('d M Y', strtotime($payment['payment_date'])) ?>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?= $payment['receipt_no'] ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">₹<?= $payment['amount'] ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">₹<?= $total_paid ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Paid
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    
                                    // Show current month as unpaid if applicable
                                    if (!$current_month_paid && $active_scheme) {
                                        ?>
                                        <tr class="bg-amber-50">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-navy"><?= $sr_no ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?= date('d M Y') ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Pending</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">₹<?= $active_scheme['monthly_amount'] ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                ₹<?= $total_paid + $active_scheme['monthly_amount'] ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    Unpaid
                                                </span>
                                            </td>
                                            <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                <a href="upayment?scheme_id=<?= $active_scheme['id'] ?>" 
                                                class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-semibold px-3 py-1 rounded-md hover:from-amber-400 hover:to-golden transition-all duration-300 text-center text-sm">
                                                    Pay Now
                                                </a>
                                            </td> -->
                                        </tr>
                                        <?php
                                    }
                                    
                                    // Show empty state if no payments at all
                                    if ($payment_count == 0 && !$active_scheme) {
                                        ?>
                                        <tr>
                                            <td colspan="7" class="px-6 py-8 text-center text-gray-500">
                                                <div class="flex flex-col items-center">
                                                    <i class="fas fa-wallet text-3xl text-gray-300 mb-3"></i>
                                                    <p class="font-medium">No payment history found</p>
                                                    <p class="text-sm">Your payment records will appear here once you make payments</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Summary Section -->
                        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-lg p-4 border border-golden/20">
                                <p class="text-xs font-medium text-gray-500">Total Paid</p>
                                <p class="font-bold text-navy text-xl">₹<?php 
                                    $total_paid_query = "SELECT SUM(amount) as total FROM scheme_payments WHERE user_id = '$user_id'";
                                    $total_paid_result = mysqli_query($conn, $total_paid_query);
                                    $total_paid = mysqli_fetch_assoc($total_paid_result);
                                    echo $total_paid['total'] ?? '0';
                                ?></p>
                            </div>
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-lg p-4 border border-golden/20">
                                <p class="text-xs font-medium text-gray-500">Total Bonus</p>
                                <p class="font-bold text-navy text-xl">₹<?php 
                                    $total_bonus_query = "SELECT SUM(
                                        CASE 
                                            WHEN scheme_type = 'A' THEN 600
                                            WHEN scheme_type = 'B' THEN 1200
                                            WHEN scheme_type = 'C' THEN 2400
                                            WHEN scheme_type = 'D' THEN 3000
                                            WHEN scheme_type = 'E' THEN 6000
                                            WHEN scheme_type = 'F' THEN 12000
                                            ELSE 0
                                        END
                                    ) as total FROM user_schemes WHERE user_id = '$user_id' AND status = 'active'";
                                    $total_bonus_result = mysqli_query($conn, $total_bonus_query);
                                    $total_bonus = mysqli_fetch_assoc($total_bonus_result);
                                    echo $total_bonus['total'] ?? '0';
                                ?></p>
                            </div>
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-lg p-4 border border-golden/20">
                                <p class="text-xs font-medium text-gray-500">Maturity Value</p>
                                <p class="font-bold text-navy text-xl">₹<?php 
                                    $maturity_value = ($total_paid['total'] ?? 0) + ($total_bonus['total'] ?? 0);
                                    echo $maturity_value;
                                ?></p>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="py-12 text-center">
                            <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-blue-50 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-book-open text-gray-400 text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-700 mb-2">No Passbook Data Available</h3>
                            <p class="text-gray-500 mb-6">Your passbook will be generated when you enroll in a gold scheme.</p>
                            <a href="ugoldscheme" class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-lg hover:from-amber-400 hover:to-golden transition-all duration-300 inline-flex items-center gap-2">
                                <i class="fas fa-plus"></i>
                                Enroll in a Scheme
                            </a>
                        </div>
                    <?php endif; ?>

                    <!-- Signature Section -->
                    <?php if ($scheme_count > 0): ?>
                        <div class="mt-12 flex justify-end items-center gap-8">
                            <div class="text-center">
                                <p class="text-3xl text-dark-blue font-greatvibes" style="font-family: 'Great Vibes', cursive;">
                                    <?php echo $_SESSION['username'] ?? 'Guest User'; ?>
                                </p>
                                <p class="text-xs text-gray-500 mt-1">Customer Signature</p>
                            </div>
                            <div class="text-center">
                                <img src="assets/sign.webp" alt="Authorized Signature" class="h-16 w-48 object-contain mx-auto">
                                <p class="text-xs text-gray-500 mt-2">Authorized Signature</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>