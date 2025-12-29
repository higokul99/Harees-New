<?php
// umyschemes.php
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

// Fetch active schemes with their details
$schemes_query = "SELECT us.*, gs.scheme_name, gs.bonus_amount, gs.final_value 
                 FROM user_schemes us
                 JOIN gold_schemes gs ON us.scheme_type = gs.scheme_code
                 WHERE us.user_id = '$user_id' AND us.status = 'active'";
$schemes_result = mysqli_query($conn, $schemes_query);
$scheme_count = mysqli_num_rows($schemes_result);

// Fetch completed schemes count
$completed_query = "SELECT COUNT(*) as completed_count FROM user_schemes WHERE user_id = '$user_id' AND status = 'completed'";
$completed_result = mysqli_query($conn, $completed_query);
$completed_data = mysqli_fetch_assoc($completed_result);
$completed_count = $completed_data['completed_count'] ?? 0;

// Fetch all active gold schemes for reference
$gold_schemes_query = "SELECT * FROM gold_schemes WHERE status = 'active'";
$gold_schemes_result = mysqli_query($conn, $gold_schemes_query);
$gold_schemes = [];
while ($row = mysqli_fetch_assoc($gold_schemes_result)) {
    $gold_schemes[$row['scheme_code']] = $row;
}

// Get active scheme IDs for passbook
$active_scheme_ids = [];
if ($scheme_count > 0) {
    $active_schemes_query = "SELECT id FROM user_schemes WHERE user_id = '$user_id' AND status = 'active'";
    $active_schemes_result = mysqli_query($conn, $active_schemes_query);
    while($row = mysqli_fetch_assoc($active_schemes_result)) {
        $active_scheme_ids[] = $row['id'];
    }
}
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
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="history" class="relative bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-lg hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-3">
                        <i class="fas fa-history"></i> History
                        <?php if ($completed_count > 0): ?>
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full h-6 w-6 flex items-center justify-center shadow-md transform hover:scale-110 transition-transform">
                                <?php echo $completed_count; ?>
                            </span>
                        <?php endif; ?>
                    </a>
                    <a href="ugoldscheme" class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-lg hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-3">
                        <i class="fas fa-plus"></i>
                        Enroll New Scheme
                    </a>
                </div>
            </div>

            <?php if (isset($_SESSION['msg'])): ?>
                <div class="mb-8 p-6 bg-gradient-to-r from-golden/20 to-amber-200/30 border-2 border-golden/30 text-dark-blue rounded-2xl shadow-lg animate-slide-up">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-check-circle text-golden text-xl"></i>
                        <span class="font-medium"><?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?></span>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="mb-8 p-6 bg-gradient-to-r from-red-100 to-amber-100 border-2 border-red-500 text-dark-blue rounded-2xl shadow-lg animate-slide-up">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                        <span class="font-medium"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></span>
                    </div>
                </div>
            <?php endif; ?>

            <!-- User's Active Schemes -->
            <div class="mb-12">
                <div class="flex justify-between items-center mb-6 px-2">
                    <h2 class="text-2xl font-bold text-navy">Your Active Schemes</h2>
                    <div class="text-sm text-gray-500 bg-gray-100 px-4 py-2 rounded-full">
                        <?php echo $scheme_count; ?> Active Scheme<?php echo $scheme_count != 1 ? 's' : ''; ?>
                    </div>
                </div>
                
                <?php if ($scheme_count > 0): ?>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php while($scheme = mysqli_fetch_assoc($schemes_result)): 
                            // Check if current month payment is pending for this scheme
                            $current_month = date('m');
                            $current_year = date('Y');
                            $current_month_name = date('F');
                            $payment_query = "SELECT id FROM scheme_payments 
                                            WHERE scheme_id = '{$scheme['id']}' 
                                            AND MONTH(payment_date) = '$current_month' 
                                            AND YEAR(payment_date) = '$current_year'";
                            $payment_result = mysqli_query($conn, $payment_query);
                            $has_payment = mysqli_num_rows($payment_result) > 0;
                            $payment_pending = !$has_payment;
                            
                            // Determine scheme styling based on scheme code
                            $isPremium = in_array($scheme['scheme_type'], ['B', 'D', 'F']);
                            $isRoseGold = in_array($scheme['scheme_type'], ['C', 'E']);
                        ?>
                        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl border-2 border-golden animate-fade-in transform hover:-translate-y-2 transition-all duration-300 group relative overflow-hidden">
                            <div class="absolute top-0 right-0 bg-golden text-dark-blue px-4 py-1 rounded-bl-lg font-bold rotate-45 translate-x-8 -translate-y-2">
                            </div>
                            <div class="p-8">
                                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                                    <div>
                                        <h2 class="text-2xl font-bold text-navy flex items-center gap-3">
                                            <div class="w-10 h-10 bg-gradient-to-br <?php echo $isPremium ? 'from-dark-blue to-navy' : 'from-golden to-amber-500'; ?> rounded-lg flex items-center justify-center group-hover:rotate-12 transition-transform">
                                                <i class="<?php 
                                                    echo $scheme['scheme_type'] == 'B' ? 'fas fa-crown' : 
                                                         ($scheme['scheme_type'] == 'D' ? 'fas fa-chess-queen' : 
                                                         ($scheme['scheme_type'] == 'F' ? 'fas fa-landmark' : 
                                                         ($scheme['scheme_type'] == 'E' ? 'fas fa-medal' : 'fas fa-coins'))); 
                                                ?> <?php echo $isPremium ? 'text-golden' : 'text-dark-blue'; ?> text-lg"></i>
                                            </div>
                                            <?php echo htmlspecialchars($scheme['scheme_name']); ?>
                                        </h2>
                                    </div>
                                    <div class="mt-4 sm:mt-0 bg-gradient-to-br <?php echo $isPremium ? 'from-dark-blue to-navy text-golden' : 'from-golden to-amber-500 text-dark-blue'; ?> px-4 py-2 rounded-lg font-bold">
                                        Scheme <?php echo htmlspecialchars($scheme['scheme_type']); ?>
                                    </div>
                                </div>

                                <div class="space-y-4 mb-6">
                                    <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border <?php echo $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20'; ?>">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <p class="text-sm font-medium text-gray-600">Monthly Installment</p>
                                                <p class="font-semibold text-navy text-xl">₹<?php echo number_format($scheme['monthly_amount'], 2); ?></p>
                                            </div>
                                            <div class="w-12 h-12 bg-gradient-to-br <?php echo $isRoseGold ? 'from-rose-gold/20 to-pink-200/20' : 'from-golden/20 to-amber-100/20'; ?> rounded-full flex items-center justify-center">
                                                <i class="fas fa-rupee-sign text-dark-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border <?php echo $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20'; ?>">
                                            <p class="text-sm font-medium text-gray-600">Term</p>
                                            <p class="font-semibold text-navy">11 Months</p>
                                        </div>
                                        <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border <?php echo $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20'; ?>">
                                            <p class="text-sm font-medium text-gray-600">Bonus</p>
                                            <p class="font-semibold text-navy">₹<?php echo number_format($scheme['bonus_amount'], 2); ?></p>
                                        </div>
                                    </div>
                                    
                                    <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border <?php echo $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20'; ?>">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <p class="text-sm font-medium text-gray-600">Final Value</p>
                                                <p class="font-semibold text-navy text-xl">₹<?php echo number_format($scheme['final_value'], 2); ?></p>
                                            </div>
                                            <div class="w-12 h-12 bg-gradient-to-br <?php echo $isRoseGold ? 'from-rose-gold/20 to-pink-200/20' : 'from-golden/20 to-amber-100/20'; ?> rounded-full flex items-center justify-center">
                                                <i class="fas fa-gem text-dark-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Progress Bar -->
                                <div class="mb-6">
                                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                                        <span>Progress</span>
                                        <span><?php echo round(($scheme['months_completed']/11)*100); ?>%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-gradient-to-r from-golden to-amber-500 h-2 rounded-full" 
                                            style="width: <?php echo round(($scheme['months_completed']/11)*100); ?>%"></div>
                                    </div>
                                </div>

                                <!-- Payment/Download Buttons Section -->
                                <div class="flex flex-col gap-4">
                                    <?php if ($payment_pending): ?>
                                        <!-- Pay Now Button (only shows if payment is pending) -->
                                        <a href="upayment?scheme_id=<?php echo $scheme['id']; ?>" 
                                            class="w-full bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center gap-3 text-center">
                                                Pay ₹<?php echo $scheme['monthly_amount']; ?> for <?php echo $current_month_name; ?>
                                        </a>
                                    <?php elseif ($scheme['months_completed'] >= 11): ?>
                                        <!-- Download Passbook Button (only shows when scheme is completed) -->
                                        <a href="download_passbook.php?scheme_id=<?php echo $scheme['id']; ?>" 
                                            class="w-full bg-gradient-to-r from-dark-blue to-navy text-white px-6 py-3 rounded-xl hover:from-navy hover:to-dark-blue transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center gap-3">
                                            <i class="fas fa-download"></i> Download Passbook
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <div class="bg-white rounded-2xl shadow-2xl border-2 border-golden/30 p-8 text-center animate-fade-in">
                        <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-blue-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-coins text-gray-400 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-700 mb-2">No Active Schemes</h3>
                        <p class="text-gray-500 mb-6">Start your gold savings journey today</p>
                        <a href="ugoldscheme" class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg inline-flex items-center gap-2">
                            <i class="fas fa-plus"></i>
                            Enroll Now
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Scheme Passbook Section -->
            <?php if ($scheme_count > 0): ?>
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border-2 border-golden/30 animate-fade-in">
                    <div class="bg-gradient-to-r from-dark-blue to-navy p-6 text-white">
                        <h2 class="text-2xl font-bold flex items-center gap-3">
                            <i class="fas fa-book text-golden"></i>
                            GOLD FUND PASS BOOK
                        </h2>
                    </div>

                    <div class="p-8">
                        <!-- User Details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                            <div class="space-y-4">
                                <div class="border-b border-golden/20 pb-2">
                                    <p class="text-xs font-medium text-gray-500">SCHEME No</p>
                                    <p class="font-medium text-navy">
                                        <?php echo 'HGSS' . str_pad($user_id, 4, '0', STR_PAD_LEFT) . '-' . date('Y'); ?>
                                    </p>
                                </div>
                                <div class="border-b border-golden/20 pb-2">
                                    <p class="text-xs font-medium text-gray-500">A/c No</p>
                                    <p class="font-medium text-navy"><?php echo 'HGS' . str_pad($user_id, 5, '0', STR_PAD_LEFT); ?></p>  
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="border-b border-golden/20 pb-2">
                                    <p class="text-xs font-medium text-gray-500">Name</p>
                                    <p class="font-medium text-navy"><?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest User'); ?></p>
                                </div>
                                
                                <div class="border-b border-golden/20 pb-2">
                                    <p class="text-xs font-medium text-gray-500">Phone No</p>
                                    <p class="font-medium text-navy"><?php echo htmlspecialchars($phone['phone'] ?? 'N/A'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Payment History Table -->
                        <div class="overflow-x-auto mb-8">
                            <table class="min-w-full divide-y divide-golden/20">
                                <thead class="bg-gradient-to-r from-dark-blue/10 to-navy/10">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sr No</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Receipt No</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Installment</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Amt</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-golden/10">
                                    <?php
                                    // Get payments only for active schemes
                                    $scheme_ids_str = implode(",", $active_scheme_ids);
                                    $payments_query = "SELECT sp.*, us.scheme_type 
                                                     FROM scheme_payments sp
                                                     JOIN user_schemes us ON us.id = sp.scheme_id
                                                     WHERE sp.user_id = '$user_id' 
                                                     AND sp.scheme_id IN ($scheme_ids_str)
                                                     ORDER BY sp.payment_date DESC";
                                    $payments_result = mysqli_query($conn, $payments_query);
                                    $payment_count = mysqli_num_rows($payments_result);
                                    
                                    // Calculate running total
                                    $total_paid = 0;
                                    $sr_no = 1;
                                    
                                    if ($payment_count > 0) {
                                        while($payment = mysqli_fetch_assoc($payments_result)) {
                                            $total_paid += $payment['amount'];
                                            ?>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-navy"><?= $sr_no++; ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                    <?= date('d M Y', strtotime($payment['payment_date'])) ?>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?= htmlspecialchars($payment['receipt_no']) ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">₹<?= number_format($payment['amount'], 2) ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">₹<?= number_format($total_paid, 2) ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Paid
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="6" class="px-6 py-8 text-center text-gray-500">
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
                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl p-6 border border-golden/20">
                                <p class="text-sm font-medium text-gray-500 mb-2">Total Paid</p>
                                <p class="font-bold text-navy text-2xl">
                                    ₹<?php 
                                        $total_paid_query = "SELECT SUM(amount) as total FROM scheme_payments 
                                                            WHERE user_id = '$user_id' 
                                                            AND scheme_id IN ($scheme_ids_str)";
                                        $total_paid_result = mysqli_query($conn, $total_paid_query);
                                        $total_paid = mysqli_fetch_assoc($total_paid_result);
                                        echo number_format($total_paid['total'] ?? 0, 2);
                                    ?>
                                </p>
                            </div>
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl p-6 border border-golden/20">
                                <p class="text-sm font-medium text-gray-500 mb-2">Total Bonus</p>
                                <p class="font-bold text-navy text-2xl">
                                    ₹<?php 
                                        $total_bonus = 0;
                                        $bonus_query = "SELECT scheme_type FROM user_schemes WHERE user_id = '$user_id' AND status = 'active'";
                                        $bonus_result = mysqli_query($conn, $bonus_query);
                                        while($row = mysqli_fetch_assoc($bonus_result)) {
                                            if(isset($gold_schemes[$row['scheme_type']])) {
                                                $total_bonus += $gold_schemes[$row['scheme_type']]['bonus_amount'];
                                            }
                                        }
                                        echo number_format($total_bonus, 2);
                                    ?>
                                </p>
                            </div>
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl p-6 border border-golden/20">
                                <p class="text-sm font-medium text-gray-500 mb-2">Maturity Value</p>
                                <p class="font-bold text-navy text-2xl">
                                    ₹<?php 
                                        $total_paid = $total_paid['total'] ?? 0;
                                        echo number_format($total_paid + $total_bonus, 2);
                                    ?>
                                </p>
                            </div>
                        </div>

                        <!-- Signature Section -->
                        <div class="flex justify-between items-center pt-8 border-t border-golden/20">
                            <div class="text-center">
                                <p class="text-3xl text-dark-blue font-greatvibes" style="font-family: 'Great Vibes', cursive;">
                                    <?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest User'); ?>
                                </p>
                                <p class="text-xs text-gray-500 mt-1">Customer Signature</p>
                            </div>
                            <div class="text-center">
                                <img src="assets/sign.webp" alt="Authorized Signature" class="h-16 w-48 object-contain mx-auto">
                                <p class="text-xs text-gray-500 mt-1">Authorized Signature</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>