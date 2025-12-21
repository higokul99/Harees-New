<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: index");
    exit();
}
include('includes/dbconnect.php');
$UserID = $_SESSION['userid'];
$query = "SELECT * FROM users WHERE id = '$UserID'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/uhead.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Your Account</title>
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
</head>

<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen">

<main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-12 animate-fade-in">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-dark-blue to-navy bg-clip-text text-transparent mb-4">
                My Profile
            </h1>
            <p class="text-gray-600 text-lg">Manage your personal information and preferences</p>
        </div>

        <?php if (isset($_SESSION['msg'])): ?>
            <div class="mb-8 p-6 bg-gradient-to-r from-golden/20 to-amber-200/30 border-2 border-golden/30 text-dark-blue rounded-2xl shadow-lg animate-slide-up">
                <div class="flex items-center gap-3">
                    <i class="fas fa-check-circle text-golden text-xl"></i>
                    <span class="font-medium"><?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?></span>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($user): ?>
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Profile Content -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Personal Information Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                            <div>
                                <h2 class="text-2xl font-bold text-navy flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-user text-dark-blue text-lg"></i>
                                    </div>
                                    Personal Information
                                </h2>
                                <p class="text-gray-600 mt-2">Update your contact details and personal information</p>
                            </div>
                            <button onclick="toggleForm('contactForm')" class="group mt-4 sm:mt-0 bg-gradient-to-r from-dark-blue to-navy text-white px-6 py-3 rounded-xl hover:from-navy hover:to-dark-blue transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-2">
                                <i class="fas fa-edit group-hover:rotate-12 transition-transform"></i>
                                Edit Details
                            </button>
                        </div>

                        <!-- Display Mode -->
                        <div id="contactDisplay" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2 relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-golden/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-signature text-dark-blue"></i>
                                        <p class="text-sm font-medium text-gray-600">Full Name</p>
                                    </div>
                                    <p class="font-semibold text-navy text-lg"><?php echo htmlspecialchars($user['fullname']); ?></p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-golden/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-envelope text-dark-blue"></i>
                                        <p class="text-sm font-medium text-gray-600">Email Address</p>
                                    </div>
                                    <p class="font-semibold text-navy text-lg"><?php echo htmlspecialchars($user['email']); ?></p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-golden/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-mobile-alt text-dark-blue"></i>
                                        <p class="text-sm font-medium text-gray-600">Phone Number</p>
                                    </div>
                                    <p class="font-semibold text-navy text-lg"><?php echo htmlspecialchars($user['phone']); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Form (Hidden by default) -->
                        <form id="contactForm" action="controller.php" method="POST" class="hidden mt-8 animate-slide-up">
                            <input type="hidden" name="action" value="update_contact">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2 relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                    </div>
                                    <input type="text" name="fullname" value="<?php echo htmlspecialchars($user['fullname']); ?>" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">Full Name</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                    </div>
                                    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">Email Address</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-mobile-alt text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                    </div>
                                    <input type="text" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">Phone Number</label>
                                </div>
                            </div>
                            
                            <div class="flex justify-end gap-4 mt-8">
                                <button type="button" onclick="toggleForm('contactForm')" class="px-6 py-3 bg-white border-2 border-golden/30 text-dark-blue rounded-xl hover:bg-golden/10 hover:border-golden transition-all duration-300">
                                    Cancel
                                </button>
                                <button type="submit" class="px-6 py-3 bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-semibold rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Address Information Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                            <div>
                                <h2 class="text-2xl font-bold text-navy flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                        <i class="fas fa-map-marker-alt text-golden text-lg"></i>
                                    </div>
                                    Address Information
                                </h2>
                                <p class="text-gray-600 mt-2">Manage your delivery addresses and location details</p>
                            </div>
                            <button onclick="toggleForm('addressForm')" class="group mt-4 sm:mt-0 bg-gradient-to-r from-golden to-amber-500 text-dark-blue px-6 py-3 rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-2">
                                <i class="fas fa-edit group-hover:rotate-12 transition-transform"></i>
                                Edit Address
                            </button>
                        </div>

                        <!-- Display Mode -->
                        <div id="addressDisplay" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2 relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-golden/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-home text-dark-blue"></i>
                                        <p class="text-sm font-medium text-gray-600">Address Line 1</p>
                                    </div>
                                    <p class="font-semibold text-navy text-lg"><?php echo htmlspecialchars($user['address1'] ?: 'Not specified'); ?></p>
                                </div>
                            </div>
                            
                            <div class="md:col-span-2 relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-golden/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-building text-dark-blue"></i>
                                        <p class="text-sm font-medium text-gray-600">Address Line 2</p>
                                    </div>
                                    <p class="font-semibold text-navy text-lg"><?php echo htmlspecialchars($user['address2'] ?: 'Not specified'); ?></p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-golden/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-city text-dark-blue"></i>
                                        <p class="text-sm font-medium text-gray-600">City</p>
                                    </div>
                                    <p class="font-semibold text-navy text-lg"><?php echo htmlspecialchars($user['city'] ?: 'Not specified'); ?></p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-golden/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-map text-dark-blue"></i>
                                        <p class="text-sm font-medium text-gray-600">State</p>
                                    </div>
                                    <p class="font-semibold text-navy text-lg"><?php echo htmlspecialchars($user['state'] ?: 'Not specified'); ?></p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-golden/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-map-pin text-dark-blue"></i>
                                        <p class="text-sm font-medium text-gray-600">Pincode</p>
                                    </div>
                                    <p class="font-semibold text-navy text-lg"><?php echo htmlspecialchars($user['pincode'] ?: 'Not specified'); ?></p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-golden/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-landmark text-dark-blue"></i>
                                        <p class="text-sm font-medium text-gray-600">Landmark</p>
                                    </div>
                                    <p class="font-semibold text-navy text-lg"><?php echo htmlspecialchars($user['landmark'] ?: 'Not specified'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Form (Hidden by default) -->
                        <form id="addressForm" action="controller.php" method="POST" class="hidden mt-8 animate-slide-up">
                            <input type="hidden" name="action" value="update_address">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2 relative group">
                                    <div class="absolute top-4 left-0 pl-4 pointer-events-none">
                                        <i class="fas fa-home text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                    </div>
                                    <textarea name="address1" rows="3" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none resize-none"><?php echo htmlspecialchars($user['address1']); ?></textarea>
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">Address Line 1</label>
                                </div>
                                
                                <div class="md:col-span-2 relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-building text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                    </div>
                                    <input type="text" name="address2" value="<?php echo htmlspecialchars($user['address2']); ?>" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">Address Line 2</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-landmark text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                    </div>
                                    <input type="text" name="landmark" value="<?php echo htmlspecialchars($user['landmark']); ?>" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">Landmark</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-city text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                    </div>
                                    <input type="text" name="city" value="<?php echo htmlspecialchars($user['city']); ?>" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">City</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-map text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                    </div>
                                    <input type="text" name="state" value="<?php echo htmlspecialchars($user['state']); ?>" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">State</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-map-pin text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                    </div>
                                    <input type="text" name="pincode" value="<?php echo htmlspecialchars($user['pincode']); ?>" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">Pincode</label>
                                </div>
                            </div>
                            
                            <div class="flex justify-end gap-4 mt-8">
                                <button type="button" onclick="toggleForm('addressForm')" class="px-6 py-3 bg-white border-2 border-golden/30 text-dark-blue rounded-xl hover:bg-golden/10 hover:border-golden transition-all duration-300">
                                    Cancel
                                </button>
                                <button type="submit" class="px-6 py-3 bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-semibold rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Add this card after the Address Information Card and before the closing </div> of the Main Profile Content -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                            <div>
                                <h2 class="text-2xl font-bold text-navy flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-heart text-dark-blue text-lg"></i>
                                    </div>
                                    Special Dates
                                </h2>
                                <p class="text-gray-600 mt-2">Add your birthday and anniversary for special offers</p>
                            </div>
                            <button onclick="toggleForm('datesForm')" class="group mt-4 sm:mt-0 bg-gradient-to-r from-dark-blue to-navy text-white px-6 py-3 rounded-xl hover:from-navy hover:to-dark-blue transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-2">
                                <i class="fas fa-edit group-hover:rotate-12 transition-transform"></i>
                                Edit Dates
                            </button>
                        </div>

                        <!-- Display Mode -->
                        <div id="datesDisplay" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-rose-100/20 to-pink-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-birthday-cake text-rose-600"></i>
                                        <p class="text-sm font-medium text-gray-600">Birthday</p>
                                    </div>
                                    <p class="font-semibold text-navy text-lg">
                                        <?php 
                                        if (!empty($user['dob'])) {
                                            echo htmlspecialchars(date('F j, Y', strtotime($user['dob'])));
                                        } else {
                                            echo 'Not specified';
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-rose-100/20 to-pink-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-heart text-rose-600"></i>
                                        <p class="text-sm font-medium text-gray-600">Anniversary</p>
                                    </div>
                                    <p class="font-semibold text-navy text-lg">
                                        <?php 
                                        if (!empty($user['anniversary'])) {
                                            echo htmlspecialchars(date('F j, Y', strtotime($user['anniversary'])));
                                        } else {
                                            echo 'Not specified';
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Form (Hidden by default) -->
                        <form id="datesForm" action="controller1.php" method="POST" class="hidden mt-8 animate-slide-up">
                            <input type="hidden" name="action" value="update_dates">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-birthday-cake text-rose-600 group-focus-within:text-rose-700 transition-colors"></i>
                                    </div>
                                    <?php
                                    // Calculate the maximum date (12 years ago from today)
                                    $maxDate = date('Y-m-d', strtotime('-12 years'));
                                    ?>

                                    <input type="date" 
                                        name="dob" 
                                        value="<?php echo !empty($user['dob']) ? htmlspecialchars($user['dob']) : ''; ?>" 
                                        max="<?php echo $maxDate; ?>"
                                        class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-rose-200 rounded-xl focus:border-rose-500 focus:ring-4 focus:ring-rose-200 transition-all duration-300 hover:shadow-md focus:outline-none"
                                        onchange="validateAge(this)"
                                        required>
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-rose-600 font-medium">Birthday</label>
                                            <script>
                                            function validateAge(input) {
                                                const selectedDate = new Date(input.value);
                                                const today = new Date();
                                                const age = today.getFullYear() - selectedDate.getFullYear();
                                                const monthDiff = today.getMonth() - selectedDate.getMonth();
                                                
                                                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < selectedDate.getDate())) {
                                                    age--;
                                                }
                                                
                                                if (age < 12) {
                                                    alert('You must be at least 12 years old to register.');
                                                    input.value = '';
                                                    return false;
                                                }
                                                return true;
                                            }
                                            </script>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-heart text-rose-600 group-focus-within:text-rose-700 transition-colors"></i>
                                    </div>
                                    <input type="date" name="anniversary" value="<?php echo !empty($user['anniversary']) ? htmlspecialchars($user['anniversary']) : ''; ?>" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-rose-200 rounded-xl focus:border-rose-500 focus:ring-4 focus:ring-rose-200 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-rose-600 font-medium">Anniversary</label>
                                </div>
                            </div>
                            
                            <div class="flex justify-end gap-4 mt-8">
                                <button type="button" onclick="toggleForm('datesForm')" class="px-6 py-3 bg-white border-2 border-rose-200 text-rose-600 rounded-xl hover:bg-rose-50 hover:border-rose-300 transition-all duration-300">
                                    Cancel
                                </button>
                                <button type="submit" class="px-6 py-3 bg-gradient-to-r from-rose-500 to-pink-600 text-white font-semibold rounded-xl hover:from-pink-600 hover:to-rose-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                    Save Dates
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-6">
                    <!-- Quick Navigation Card -->
                    <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                <i class="fas fa-compass"></i>
                                QUICK ACCESS
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <a href="umyorders" class="block w-full bg-white/20 backdrop-blur-sm text-dark-blue font-bold py-4 px-6 rounded-xl hover:bg-white/30 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-shopping-bag text-dark-blue group-hover:scale-110 transition-transform"></i>
                                    <span>MY ORDERS</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                            
                            <a href="ugoldscheme" class="block w-full bg-white/20 backdrop-blur-sm text-dark-blue font-bold py-4 px-6 rounded-xl hover:bg-white/30 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-coins text-dark-blue group-hover:scale-110 transition-transform"></i>
                                    <span>MY GOLD SCHEME</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Account Security Card -->
                    <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-golden flex items-center gap-2">
                                <i class="fas fa-shield-halved"></i>
                                ACCOUNT SECURITY
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between items-center">
                                <span class="text-white/90 flex items-center gap-2">
                                    <i class="fas fa-key text-golden text-sm"></i>
                                    Password Protection
                                </span>
                                <span class="text-green-400 text-sm font-semibold">Active</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-white/90 flex items-center gap-2">
                                    <i class="fas fa-user-check text-golden text-sm"></i>
                                    Account Verified
                                </span>
                                <span class="text-green-400 text-sm font-semibold">Yes</span>
                            </div>
                        </div>

                        <button onclick="handlePasswordFormToggle()" class="w-full bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold py-4 rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg mb-6">
                            CHANGE PASSWORD
                        </button>

                        <!-- Contact Info -->
                        <div class="text-center text-white/90 text-sm">
                            <p class="mb-2">Need Help?</p>
                            <p>Please call us at <a href="tel:18004190066" class="font-semibold text-golden hover:underline">18004190066</a> or 
                            <button type="button" class="text-golden underline hover:no-underline">Chat with us</button></p>
                        </div>
                    </div>

                   <!-- Trust Indicators -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center group">
                                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                    <i class="fas fa-gem text-dark-blue text-lg"></i>
                                </div>
                                <p class="text-xs font-semibold text-navy leading-tight">PREMIUM<br>MEMBER</p>
                            </div>
                            <div class="text-center group">
                                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-dark-blue to-navy rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                    <i class="fas fa-handshake text-golden text-lg"></i>
                                </div>
                                <p class="text-xs font-semibold text-navy leading-tight">TRUSTED<br>CUSTOMER</p>
                            </div>
                            <div class="text-center group">
                                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-golden to-yellow-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                    <i class="fas fa-lock text-dark-blue text-lg"></i>
                                </div>
                                <p class="text-xs font-semibold text-navy leading-tight">SECURE<br>ACCOUNT</p>
                            </div>
                            <div class="text-center group">
                                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-dark-blue to-darker-blue rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                                                        <i class="fas fa-headset text-golden text-lg"></i>
                                </div>
                                <p class="text-xs font-semibold text-navy leading-tight">24/7<br>SUPPORT</p>
                            </div>
                        </div>
                    </div>

                    <!-- Password Change Form (Hidden by default) -->
                    <form id="passwordForm" action="controller1.php" method="POST" class="hidden bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                        <input type="hidden" name="action" value="change_password">
                        <h3 class="text-xl font-bold text-navy mb-6">Change Password</h3>
                        
                        <div class="space-y-4">
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                </div>
                                <input type="password" name="current_password" placeholder="Current Password" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-key text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                </div>
                                <input type="password" name="new_password" placeholder="New Password" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-key text-dark-blue group-focus-within:text-navy transition-colors"></i>
                                </div>
                                <input type="password" name="confirm_password" placeholder="Confirm New Password" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                            </div>
                        </div>
                        
                        <div class="flex justify-end gap-4 mt-6">
                            <button type="button" onclick="toggleForm('passwordForm')" class="px-6 py-3 bg-white border-2 border-golden/30 text-dark-blue rounded-xl hover:bg-golden/10 hover:border-golden transition-all duration-300">
                                Cancel
                            </button>
                            <button type="submit" class="px-6 py-3 bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-semibold rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                Update Password
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <?php else: ?>
            <div class="text-center py-12">
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 max-w-md mx-auto border border-golden/20">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-red-500 to-rose-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-exclamation text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-4">User Not Found</h3>
                    <p class="text-gray-600 mb-6">We couldn't find your profile information. Please try logging in again.</p>
                    <a href="logout" class="px-6 py-3 bg-gradient-to-r from-dark-blue to-navy text-white font-semibold rounded-xl hover:from-navy hover:to-dark-blue transition-all duration-300 inline-block">
                        Logout & Try Again
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>

<script>
    function toggleForm(formId) {
        const form = document.getElementById(formId);
        const display = document.getElementById(formId.replace('Form', 'Display'));
        
        if (form && display) {
            form.classList.toggle('hidden');
            display.classList.toggle('hidden');
            
            if (!form.classList.contains('hidden')) {
                form.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                display.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    }
</script>
<script>
    // Make sure this is placed right before the closing </body> tag
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize any needed variables
    });

    function handlePasswordFormToggle() {
        const form = document.getElementById('passwordForm');
        const securityCard = document.querySelector('.bg-gradient-to-br.from-dark-blue'); // Select the security card
        
        if (form && securityCard) {
            form.classList.toggle('hidden');
            
            // Smooth scroll to the form if it's being shown
            if (!form.classList.contains('hidden')) {
                form.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                
                // Optional: collapse the security card a bit
                securityCard.style.marginBottom = '1.5rem';
            } else {
                // Optional: expand the security card back
                securityCard.style.marginBottom = '';
            }
        } else {
            console.error('Could not find password form or security card');
        }
    }

    // Keep your existing toggleForm function for other forms
    function toggleForm(formId) {
        const form = document.getElementById(formId);
        const display = document.getElementById(formId.replace('Form', 'Display'));
        
        if (form && display) {
            form.classList.toggle('hidden');
            display.classList.toggle('hidden');
            
            if (!form.classList.contains('hidden')) {
                form.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                display.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    }
</script>

<?php include('includes/footer.php'); ?>
</body>
</html>