<!DOCTYPE html>
<html lang="en">

<?php
    session_start();

    if (isset($_SESSION['userid'])) {
        include('includes/uhead.php');
    } else {
        include('includes/head.php');
        include('includes/header.php');
        include('includes/navbar.php');
    }
    include ('includes/dbconnect.php');

    $query1 = "SELECT `18k_1gm`, `22k_1gm`, `updated_on` FROM goldrate ORDER BY updated_on DESC LIMIT 1";
    $result1 = mysqli_query($conn, $query1);

    if ($row1 = mysqli_fetch_assoc($result1)) {
        $rate_18k = $row1['18k_1gm'];
        $rate_22k = $row1['22k_1gm'];
        $date = $row1['updated_on'];
    }

?>

<?php
            // Fetch data for market insights with more robust queries
            $current_query = "SELECT `18k_1gm`, `22k_1gm` FROM goldrate_history ORDER BY updated_on DESC LIMIT 1";
            $current_result = mysqli_query($conn, $current_query);
            $current = mysqli_fetch_assoc($current_result);
            
            // Get previous day's data (skip weekends if needed)
            $prev_query = "SELECT `18k_1gm`, `22k_1gm` FROM goldrate_history 
                        WHERE DATE(updated_on) < DATE(NOW()) 
                        ORDER BY updated_on DESC LIMIT 1";
            $prev_result = mysqli_query($conn, $prev_query);
            $prev = mysqli_fetch_assoc($prev_result);
            
            // Get data from 30 days ago (or nearest available)
            $month_ago_query = "SELECT `18k_1gm`, `22k_1gm` FROM goldrate_history 
                            WHERE DATE(updated_on) <= DATE_SUB(CURDATE(), INTERVAL 30 DAY)
                            ORDER BY updated_on DESC LIMIT 1";
            $month_ago_result = mysqli_query($conn, $month_ago_query);
            $month_ago = mysqli_fetch_assoc($month_ago_result);
            
            // Initialize variables with default values
            $change_18k = 0;
            $change_22k = 0;
            $change_percent_18k = 0;
            $change_percent_22k = 0;
            $trend_18k = 'Neutral';
            $trend_22k = 'Neutral';
            $month_change_18k = 0;
            $month_change_22k = 0;
            $month_percent_18k = 0;
            $month_percent_22k = 0;
            
            if ($current) {
                // Calculate 24h changes with validation
                if ($prev && $prev['18k_1gm'] > 0) {
                    $change_18k = $current['18k_1gm'] - $prev['18k_1gm'];
                    $change_percent_18k = ($change_18k / $prev['18k_1gm']) * 100;
                    $trend_18k = $change_18k > 0 ? 'Bullish' : ($change_18k < 0 ? 'Bearish' : 'Neutral');
                }
                
                if ($prev && $prev['22k_1gm'] > 0) {
                    $change_22k = $current['22k_1gm'] - $prev['22k_1gm'];
                    $change_percent_22k = ($change_22k / $prev['22k_1gm']) * 100;
                    $trend_22k = $change_22k > 0 ? 'Bullish' : ($change_22k < 0 ? 'Bearish' : 'Neutral');
                }
                
                // Calculate 30d performance with validation
                if ($month_ago && $month_ago['18k_1gm'] > 0) {
                    $month_change_18k = $current['18k_1gm'] - $month_ago['18k_1gm'];
                    $month_percent_18k = ($month_change_18k / $month_ago['18k_1gm']) * 100;
                }
                
                if ($month_ago && $month_ago['22k_1gm'] > 0) {
                    $month_change_22k = $current['22k_1gm'] - $month_ago['22k_1gm'];
                    $month_percent_22k = ($month_change_22k / $month_ago['22k_1gm']) * 100;
                }
            }
            
            // Format numbers
            $change_18k = number_format($change_18k, 2);
            $change_22k = number_format($change_22k, 2);
            $change_percent_18k = number_format($change_percent_18k, 2);
            $change_percent_22k = number_format($change_percent_22k, 2);
            $month_change_18k = number_format($month_change_18k, 2);
            $month_change_22k = number_format($month_change_22k, 2);
            $month_percent_18k = number_format($month_percent_18k, 2);
            $month_percent_22k = number_format($month_percent_22k, 2);
            ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold & Silver Rates - Precious Metal Prices</title>
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
                        'dark-gold': '#d4a017',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.3s ease-out',
                        'pulse-slow': 'pulse 3s infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 5px rgba(251, 191, 36, 0.5)' },
                            '100%': { boxShadow: '0 0 20px rgba(251, 191, 36, 0.8)' }
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .gold-gradient-text {
            background: linear-gradient(135deg, #fbbf24, #fcd34d, #fbbf24);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .gold-accent {
            height: 2px;
            background: linear-gradient(90deg, transparent, #fbbf24, #fcd34d, #fbbf24, transparent);
        }
        .rate-card {
            transition: all 0.3s ease;
        }
        .rate-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 20px -5px rgba(0, 0, 0, 0.15);
        }
        .price-badge {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .price-badge::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0) 20%,
                rgba(255, 255, 255, 0.8) 50%,
                rgba(255, 255, 255, 0) 80%
            );
            transform: rotate(15deg);
            transition: all 0.7s ease;
        }
        .price-badge:hover::after {
            left: 100%;
        }
        .market-card {
            transition: all 0.3s ease;
        }
        .market-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px -3px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen">

<main class="pt-16 pb-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-6 animate-fade-in">
            <h1 class="text-4xl md:text-5xl font-bold gold-gradient-text mb-4">
                Today's Gold Rates
            </h1>
            <div class="gold-accent w-48 mx-auto my-4 rounded-full"></div>
            <div class="inline-flex items-center bg-gradient-to-r from-golden/20 to-amber-200/30 border-2 border-golden/30 text-dark-blue px-6 py-3 rounded-full shadow-lg">
                <i class="fas fa-sync-alt mr-2 text-golden"></i>
                <!-- <strong>1 July, 2025, 10:30 PM</strong> -->
                <strong><?php echo date("F j, Y \a\\t h:i A", strtotime($date)); ?></strong>
            </div>
        </div>

        <!-- Price Cards (Premium Compact) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

            <!-- 18KT Gold (Blue Gradient) -->
            <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-lg p-5 text-white animate-slide-up border-2 border-golden/30 hover:shadow-xl transition-all duration-300">
                <div class="text-center mb-2">
                    <!-- <div class="text-golden font-bold text-lg tracking-wider mb-1">GOLD</div> -->
                    <h3 class="text-2xl font-bold text-white">18 KT Gold</h3>
                    <p class="text-white/90 text-sm italic">(750 Pure)</p>
                </div>
                
                <div class="space-y-4 mt-4">
                    <div class="bg-white/15 backdrop-blur-md p-4 rounded-xl border border-golden/30 text-center transform hover:scale-[1.02] transition-transform">
                        <div class="text-xs font-semibold text-white/90 uppercase tracking-widest mb-1">Per Gram</div>
                        <div class="text-2xl font-bold text-white">
                            <span class="text-golden">₹</span><?php echo htmlspecialchars($rate_18k); ?><span class="text-white/80 text-sm ml-1">/g</span>
                        </div>
                    </div>
                    
                    <div class="bg-white/15 backdrop-blur-md p-4 rounded-xl border border-golden/30 text-center transform hover:scale-[1.02] transition-transform">
                        <div class="text-xs font-semibold text-white/90 uppercase tracking-widest mb-1">Per Pavan (8g)</div>
                        <div class="text-2xl font-bold text-white">
                            <span class="text-golden">₹</span><?php echo htmlspecialchars($rate_18k)*8; ?>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center mt-5">
                    <span class="px-4 py-2 bg-white/90 <?php echo $change_18k >= 0 ? 'text-green-800' : 'text-red-800'; ?> font-bold rounded-full text-sm flex items-center shadow-md hover:shadow-lg transition-shadow">
                        <i class="fas <?php echo $change_18k >= 0 ? 'fa-arrow-up' : 'fa-arrow-down'; ?> mr-2 animate-pulse"></i>
                        <?php echo ($change_18k >= 0 ? '+' : '') . $change_18k; ?> 
                        <span class="text-xs ml-1">(<?php echo ($change_percent_18k >= 0 ? '+' : '') . $change_percent_18k; ?>%)</span>
                    </span>
                </div>

            </div> 

            <!-- 22KT Gold (Golden Gradient) -->
            <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-lg p-5 text-dark-blue animate-slide-up border-2 border-golden/30 hover:shadow-xl transition-all duration-300">
                <div class="text-center mb-2">
                    <!-- <div class="text-dark-blue font-bold text-lg tracking-wider mb -1">GOLD</div> -->
                    <h3 class="text-2xl font-bold text-dark-blue">22 KT Gold</h3>
                    <p class="text-dark-blue/90 text-sm italic">(916 Pure)</p>
                </div>
                
                <div class="space-y-4 mt-4">
                    <div class="bg-white/25 backdrop-blur-md p-4 rounded-xl border border-golden/40 text-center transform hover:scale-[1.02] transition-transform">
                        <div class="text-xs font-semibold text-dark-blue/90 uppercase tracking-widest mb-1">Per Gram</div>
                        <div class="text-2xl font-bold text-dark-blue">
                            <span>₹</span><?php echo htmlspecialchars($rate_22k); ?><span class="text-dark-blue/80 text-sm ml-1">/g</span>
                        </div>
                    </div>
                    
                    <div class="bg-white/25 backdrop-blur-md p-4 rounded-xl border border-golden/40 text-center transform hover:scale-[1.02] transition-transform">
                        <div class="text-xs font-semibold text-dark-blue/90 uppercase tracking-widest mb-1">Per Pavan (8g)</div>
                        <div class="text-2xl font-bold text-dark-blue">
                            <span>₹</span><?php echo htmlspecialchars($rate_22k)*8; ?>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center mt-5">
                    <span class="px-4 py-2 bg-white/90 <?php echo $change_22k >= 0 ? 'text-green-800' : 'text-red-800'; ?> font-bold rounded-full text-sm flex items-center shadow-md hover:shadow-lg transition-shadow">
                        <i class="fas <?php echo $change_22k >= 0 ? 'fa-arrow-up' : 'fa-arrow-down'; ?> mr-2 animate-pulse"></i>
                        <?php echo ($change_22k >= 0 ? '+' : '') . $change_22k; ?> 
                        <span class="text-xs ml-1">(<?php echo ($change_percent_22k >= 0 ? '+' : '') . $change_percent_22k; ?>%)</span>
                    </span>
                </div>
            </div>
            
        </div>

         <!-- Market Insights Section -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 mb-12 border border-golden/20 animate-fade-in">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-navy flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center shadow-md">
                            <i class="fas fa-chart-line text-golden text-lg"></i>
                        </div>
                        Market Insights
                    </h2>
                    <p class="text-gray-600 mt-2">Current trends and analysis for gold</p>
                </div>
                <div class="flex space-x-3 mt-4 md:mt-0">
                    <button class="px-4 py-2 bg-gradient-to-r from-dark-blue to-navy text-white rounded-lg font-medium transition-all duration-300 ">
                        View Historical Data
                    </button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- 24h Change Card -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-xl border border-blue-200 market-card">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center mr-3 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-800">24 hour Change</h4>
                    </div>
                    <div class="space-y-2">
                        <div class="text-gray-700">
                            18 KT: 
                            <span class="<?php echo $change_18k >= 0 ? 'text-green-600' : 'text-red-600'; ?> font-medium">
                                <?php echo ($change_18k >= 0 ? '+' : '') . $change_18k; ?> 
                                <span class="text-xs">(<?php echo ($change_percent_18k >= 0 ? '+' : '') . $change_percent_18k; ?>%)</span>
                            </span>
                            <?php if (!$prev) echo '<span class="text-xs text-gray-500 ml-1">(No prev. data)</span>'; ?>
                        </div>
                        <div class="text-gray-700">
                            22 KT: 
                            <span class="<?php echo $change_22k >= 0 ? 'text-green-600' : 'text-red-600'; ?> font-medium">
                                <?php echo ($change_22k >= 0 ? '+' : '') . $change_22k; ?> 
                                <span class="text-xs">(<?php echo ($change_percent_22k >= 0 ? '+' : '') . $change_percent_22k; ?>%)</span>
                            </span>
                            <?php if (!$prev) echo '<span class="text-xs text-gray-500 ml-1">(No prev. data)</span>'; ?>
                        </div>
                        <?php if ($prev): ?>
                        <div class="text-xs text-gray-500 mt-2">
                            Previous day rates: 
                            ₹<?php echo $prev['18k_1gm']; ?> (18K), 
                            ₹<?php echo $prev['22k_1gm']; ?> (22K)
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Current Trend Card -->
                <div class="bg-gradient-to-br from-amber-50 to-yellow-50 p-6 rounded-xl border border-amber-200 market-card">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center mr-3 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5z" />
                                <path d="M9 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1h-2a1 1 0 01-1-1V7z" />
                                <path d="M16 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                                <path fill-rule="evenodd" d="M12 7a1 1 0 01-1.707-.707l3-3a1 1 0 011.414 1.414l-3 3A1 1 0 0112 7z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M12 13a1 1 0 01-.707.293l-3-3a1 1 0 011.414-1.414l3 3A1 1 0 0112 13z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-800">Current Trend</h4>
                    </div>
                    <div class="space-y-2">
                        <div class="text-gray-700">
                            18 KT: 
                            <span class="<?php 
                                echo $trend_18k == 'Bullish' ? 'text-green-600' : 
                                    ($trend_18k == 'Bearish' ? 'text-red-600' : 'text-gray-600'); 
                            ?> font-medium">
                                <?php echo $trend_18k; ?>
                                <?php if ($prev): ?>
                                <span class="text-xs ml-1">
                                    (<?php echo ($change_18k >= 0 ? '+' : '') . $change_18k; ?>)
                                </span>
                                <?php endif; ?>
                            </span>
                            <?php if (!$prev) echo '<span class="text-xs text-gray-500 ml-1">(No prev. data)</span>'; ?>
                        </div>
                        <div class="text-gray-700">
                            22 KT: 
                            <span class="<?php 
                                echo $trend_22k == 'Bullish' ? 'text-green-600' : 
                                    ($trend_22k == 'Bearish' ? 'text-red-600' : 'text-gray-600'); 
                            ?> font-medium">
                                <?php echo $trend_22k; ?>
                                <?php if ($prev): ?>
                                <span class="text-xs ml-1">
                                    (<?php echo ($change_22k >= 0 ? '+' : '') . $change_22k; ?>)
                                </span>
                                <?php endif; ?>
                            </span>
                            <?php if (!$prev) echo '<span class="text-xs text-gray-500 ml-1">(No prev. data)</span>'; ?>
                        </div>
                        <div class="text-xs text-gray-500 mt-2">
                            Current rates: 
                            ₹<?php echo $current['18k_1gm']; ?> (18K), 
                            ₹<?php echo $current['22k_1gm']; ?> (22K)
                        </div>
                    </div>
                </div>
                
                <!-- 30d Performance Card -->
                <div class="bg-gradient-to-br from-gray-50 to-slate-50 p-6 rounded-xl border border-gray-200 market-card">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center mr-3 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                <text x="14" y="16" font-size="5" font-weight="bold" fill="currentColor">30</text>
                                <path d="M5 8h2v1H5z" />
                                <path d="M8 8h2v1H8z" />
                                <path d="M11 8h2v1h-2z" />
                                <path d="M5 10h2v1H5z" />
                                <path d="M8 10h2v1H8z" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-800">30 days Performance</h4>
                    </div>
                    <div class="space-y-2">
                        <div class="text-gray-700">
                            18 KT: 
                            <span class="<?php echo $month_change_18k >= 0 ? 'text-green-600' : 'text-red-600'; ?> font-medium">
                                <?php echo ($month_change_18k >= 0 ? '+' : '') . $month_change_18k; ?> 
                                <span class="text-xs">(<?php echo ($month_percent_18k >= 0 ? '+' : '') . $month_percent_18k; ?>%)</span>
                            </span>
                            <?php if (!$month_ago) echo '<span class="text-xs text-gray-500 ml-1">(No 30d data)</span>'; ?>
                        </div>
                        <div class="text-gray-700">
                            22 KT: 
                            <span class="<?php echo $month_change_22k >= 0 ? 'text-green-600' : 'text-red-600'; ?> font-medium">
                                <?php echo ($month_change_22k >= 0 ? '+' : '') . $month_change_22k; ?> 
                                <span class="text-xs">(<?php echo ($month_percent_22k >= 0 ? '+' : '') . $month_percent_22k; ?>%)</span>
                            </span>
                            <?php if (!$month_ago) echo '<span class="text-xs text-gray-500 ml-1">(No 30d data)</span>'; ?>
                        </div>
                        <?php if ($month_ago): ?>
                        <div class="text-xs text-gray-500 mt-2">
                            30 days ago rates: 
                            ₹<?php echo $month_ago['18k_1gm']; ?> (18K), 
                            ₹<?php echo $month_ago['22k_1gm']; ?> (22K)
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Any initialization code can go here
    });
</script>

<?php include('includes/footer.php'); ?>

</body>
</html>