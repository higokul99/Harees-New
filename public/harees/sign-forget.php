<?php
session_start();
include('includes/dbconnect.php');

// Initialize variables
$showPhoneForm = true;
$showSecurityForm = false;
$showPinForm = false;
$phone = '';
$security_question = '';
$security_answer = '';

// Check if we have a phone number in session (from previous submission)
if (isset($_SESSION['reset_phone'])) {
    $phone = $_SESSION['reset_phone'];
    $showPhoneForm = false;
    $showSecurityForm = true;
    
    // If we also have security answer verification, show PIN form
    if (isset($_SESSION['security_verified']) && $_SESSION['security_verified'] === true) {
        $showSecurityForm = false;
        $showPinForm = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/head.php'); ?>
</head>
<body style="background-color: #feffd6;">
    <?php include('includes/header.php'); ?>
    <?php include('includes/navbar.php'); ?>

    <div class="min-h-screen flex items-center justify-center px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">
                    <?php echo $showPinForm ? 'Reset Your PIN' : ($showSecurityForm ? 'Security Verification' : 'Forgot Password'); ?>
                </h1>
                <p class="text-gray-600">
                    <?php echo $showPinForm ? 'Enter your new 4-digit PIN' : ($showSecurityForm ? 'Verify your security question' : 'Enter your phone number to reset your PIN'); ?>
                </p>

                <!-- Error message display -->
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline"><?php echo $_SESSION['error']; ?></span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" onclick="this.parentElement.parentElement.style.display='none'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                            </svg>
                        </span>
                    </div>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>
            </div>

            <!-- Phone Number Form (Initial Step) -->
            <?php if ($showPhoneForm): ?>
            <form method="POST" action="controller.php" class="space-y-6">
                <!-- Phone field -->
                <div>
                    <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">
                        Phone Number <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="tel" 
                        id="phone" 
                        name="phone" 
                        required
                        pattern="[0-9]{10}"
                        title="Please enter a 10-digit phone number"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                        placeholder="Enter your phone number"
                        value="<?php echo htmlspecialchars($phone); ?>"
                    >
                </div>

                <!-- Submit button -->
                <button 
                    type="submit" 
                    name="forgot_password"
                    class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105"
                >
                    Continue
                </button>
            </form>
            <?php endif; ?>

            <!-- Security Question Form (Second Step) -->
            <?php if ($showSecurityForm): ?>
            <form method="POST" action="controller.php" class="space-y-6">
                <input type="hidden" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
                
                <!-- Display Security Question from registration -->
                <div>
                    <label for="security_question" class="block text-gray-700 text-sm font-medium mb-2">
                        Your Security Question <span class="text-red-500">*</span>
                    </label>
                    <select 
                        id="security_question" 
                        name="security_question" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                    >
                        <option value="">Select your security question</option>
                        <option value="What was your first pet's name?" <?php echo ($_SESSION['security_question'] === "What was your first pet's name?") ? 'selected' : ''; ?>>What was your first pet's name?</option>
                        <option value="What city were you born in?" <?php echo ($_SESSION['security_question'] === "What city were you born in?") ? 'selected' : ''; ?>>What city were you born in?</option>
                        <option value="What is your mother's maiden name?" <?php echo ($_SESSION['security_question'] === "What is your mother's maiden name?") ? 'selected' : ''; ?>>What is your mother's maiden name?</option>
                        <option value="What was the name of your first school?" <?php echo ($_SESSION['security_question'] === "What was the name of your first school?") ? 'selected' : ''; ?>>What was the name of your first school?</option>
                        <option value="What is your favorite movie?" <?php echo ($_SESSION['security_question'] === "What is your favorite movie?") ? 'selected' : ''; ?>>What is your favorite movie?</option>
                    </select>
                </div>

                <!-- Security Answer -->
                <div>
                    <label for="security_answer" class="block text-gray-700 text-sm font-medium mb-2">
                        Your Answer <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="security_answer" 
                        name="security_answer" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                        placeholder="Enter your answer"
                    >
                </div>

                <!-- Submit button -->
                <button 
                    type="submit" 
                    name="verify_security"
                    class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105"
                >
                    Continue
                </button>
            </form>
            <?php endif; ?>

            <!-- PIN Reset Form (Final Step) -->
            <?php if ($showPinForm): ?>
            <form method="POST" action="controller.php" class="space-y-6">
                <input type="hidden" name="phone" value="<?php echo htmlspecialchars($phone); ?>">

                <!-- New PIN -->
                <div>
                    <label for="new_pin" class="block text-gray-700 text-sm font-medium mb-2">
                        New 4-digit PIN <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="password" 
                        id="new_pin" 
                        name="new_pin" 
                        required
                        maxlength="4"
                        pattern="\d{4}"
                        title="PIN must be exactly 4 digits"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                        placeholder="Enter new PIN"
                    >
                </div>

                <!-- Confirm PIN -->
                <div>
                    <label for="confirm_pin" class="block text-gray-700 text-sm font-medium mb-2">
                        Confirm PIN <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="password" 
                        id="confirm_pin" 
                        name="confirm_pin" 
                        required
                        maxlength="4"
                        pattern="\d{4}"
                        title="PIN must be exactly 4 digits"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                        placeholder="Confirm your PIN"
                    >
                </div>

                <!-- Submit button -->
                <button 
                    type="submit" 
                    name="reset_password"
                    class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105"
                >
                    Update PIN
                </button>
            </form>
            <?php endif; ?>

            <!-- Back to Login Link -->
            <div class="text-center mt-6">
                <p class="text-gray-600">
                    Remember your PIN? 
                    <a 
                        href="sign-in" 
                        class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-200"
                    >
                        Login Here
                    </a>
                </p>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>