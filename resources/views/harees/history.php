<?php
// history.php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: sign-in");
    exit();
}
include('includes/dbconnect.php');
include('includes/uhead.php');

$user_id = $_SESSION['userid'];

// Fetch completed schemes with their details from gold_schemes table
$completed_schemes_query = "SELECT us.*, gs.scheme_name, gs.bonus_amount, gs.final_value 
                          FROM user_schemes us
                          JOIN gold_schemes gs ON us.scheme_type = gs.scheme_code
                          WHERE us.user_id = '$user_id' 
                          AND (us.status = 'completed' OR us.status = 'cancelled')
                          ORDER BY us.updated_at DESC";
$completed_schemes_result = mysqli_query($conn, $completed_schemes_query);
?>

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
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-navy">Completed/Purchased Schemes History</h1>
                <a href="umyschemes" class="group mt-4 sm:mt-0 bg-gradient-to-r from-dark-blue to-navy text-white px-6 py-3 rounded-xl hover:from-navy hover:to-dark-blue transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i>
                    Back to Schemes
                </a>
            </div>

            <?php if (mysqli_num_rows($completed_schemes_result) > 0): ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php while($scheme = mysqli_fetch_assoc($completed_schemes_result)): 
                        $isCompleted = $scheme['status'] == 'completed';
                    ?>
                        <div class="bg-white rounded-xl shadow-md border <?php echo $isCompleted ? 'border-green-200/50' : 'border-amber-200/50'; ?> hover:shadow-lg transition-all">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-gradient-to-br <?php echo $isCompleted ? 'from-green-500 to-green-600' : 'from-amber-500 to-amber-600'; ?> rounded-lg flex items-center justify-center">
                                            <i class="fas <?php echo $isCompleted ? 'fa-check' : 'fa-shopping-bag'; ?> text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-bold text-navy"><?php echo htmlspecialchars($scheme['scheme_name']); ?></h3>
                                            <p class="text-gray-500 text-xs"><?php echo $isCompleted ? 'Completed' : 'Purchased'; ?> <?php echo date('d M Y', strtotime($scheme['updated_at'])); ?></p>
                                        </div>
                                    </div>
                                    <span class="group mt-4 sm:mt-0 bg-gradient-to-r <?php echo $isCompleted ? 'from-green-500 to-green-600' : 'from-amber-500 to-amber-600'; ?> text-white px-6 py-3 rounded-xl hover:from-green-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-2">
                                        <?php echo $isCompleted ? 'Completed' : 'Purchased'; ?>
                                    </span>
                                </div>
                                <p class="text-yellow-500 text-xs">Scheme No: <?php echo htmlspecialchars($scheme['code']); ?></p>
                                <div class="grid grid-cols-2 gap-3 mb-4">
                                    <div class="bg-gray-50 rounded-lg p-2 border <?php echo $isCompleted ? 'border-green-100' : 'border-amber-100'; ?>">
                                        <p class="text-xs text-gray-500">Monthly</p>
                                        <p class="font-semibold text-navy">₹<?php echo number_format($scheme['monthly_amount'], 2); ?></p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-2 border <?php echo $isCompleted ? 'border-green-100' : 'border-amber-100'; ?>">
                                        <p class="text-xs text-gray-500">Term</p>
                                        <p class="font-semibold text-navy">11 Months</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-2 border <?php echo $isCompleted ? 'border-green-100' : 'border-amber-100'; ?>">
                                        <p class="text-xs text-gray-500">Paid</p>
                                        <p class="font-semibold text-navy"><?php echo $scheme['months_completed']; ?>/11</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-2 border <?php echo $isCompleted ? 'border-green-100' : 'border-amber-100'; ?>">
                                        <p class="text-xs text-gray-500">Bonus</p>
                                        <p class="font-semibold text-navy">₹<?php echo number_format($scheme['bonus_amount'], 2); ?></p>
                                    </div>
                                </div>

                                <div class="bg-gray-50 rounded-lg p-3 border <?php echo $isCompleted ? 'border-green-100' : 'border-amber-100'; ?> mb-4">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-xs text-gray-500"><?php echo $isCompleted ? 'Maturity Value' : 'Purchased Value'; ?></p>
                                            <p class="font-semibold text-navy">₹<?php 
                                                $total = $scheme['monthly_amount'] * $scheme['months_completed'] + $scheme['bonus_amount'];
                                                echo number_format($total, 2);
                                            ?></p>
                                        </div>
                                        <div class="w-8 h-8 <?php echo $isCompleted ? 'bg-yellow-100/50' : 'bg-amber-100/50'; ?> rounded-full flex items-center justify-center">
                                            <i class="fas fa-gem <?php echo $isCompleted ? 'text-yellow-500' : 'text-amber-500'; ?>"></i>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($isCompleted): ?>
                                    <a href="download_passbook.php?scheme_id=<?php echo $scheme['id']; ?>" 
                                       class="group mt-4 sm:mt-0 bg-gradient-to-r from-dark-blue to-navy text-white px-6 py-3 rounded-xl hover:from-navy hover:to-dark-blue transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-2">
                                        <i class="fas fa-download"></i>
                                        Download Passbook and Contact Your Nearest Store
                                    </a>
                                <?php else: ?>
                                    <div class="text-center py-3 px-4 bg-amber-50 rounded-lg border border-amber-100">
                                        <p class="text-amber-700 font-medium">
                                            <i class="fas fa-heart text-amber-500 mr-2"></i>
                                            Thanks for your purchase! Continue shopping
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <div class="bg-white rounded-xl shadow-md border border-gray-200 p-8 text-center">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-history text-gray-400 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">No Completed/Purchased Schemes</h3>
                    <p class="text-gray-500 mb-6">Your completed or purchased schemes will appear here.</p>
                    <a href="ugoldscheme" class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-lg hover:from-amber-400 hover:to-golden transition-all inline-flex items-center gap-2">
                        <i class="fas fa-plus"></i>
                        Enroll in a Scheme
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html> 