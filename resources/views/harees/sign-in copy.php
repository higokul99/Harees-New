<!DOCTYPE html>
<html lang="en">
<!-- head tag open -->
<?php session_start(); ?>
<?php include('includes/head.php'); ?>
<body style="background-color: #feffd6;">
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
<!-- nav bar close -->

<!-- ###################################--START--########################################## -->

<div class="min-h-screen flex items-center justify-center px-4 py-8">
  <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
    <!-- Header -->
    <div class="text-center mb-8">
      <h1 class="text-2xl font-bold text-gray-800 mb-2">Login</h1>

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

    <!-- Login form -->
    <form method="POST" action="controller.php" class="space-y-6">
      <!-- Email field -->
      <div>
        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">
          Mobile Number
        </label>
        <input type="text" id="phone" name="phone" required
            pattern="\d{10}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all duration-200"
            placeholder="Enter your number"
            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
            title="Please enter exactly 10 digits">

      </div>

      <!-- Password field -->
      <div>
        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">
          Password
        </label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          required
          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all duration-200"
          placeholder="Enter your password"
        >
      </div>

      <!-- Remember me and forgot password -->
      <div class="flex items-center justify-between">
        <label class="flex items-center">
          <input type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
          <span class="ml-2 text-gray-700 text-sm">Remember me</span>
        </label>
        <a href="sign-forget.php" class="text-yellow-600 hover:text-yellow-400 text-sm transition-colors duration-200">
          Forgot password?
        </a>
      </div>

      <!-- Login button -->
      <button 
        type="submit" 
        name="login"
        style="background-color: #facc15;"
        class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105"
      >
        Login
      </button>
    </form>

    <!-- Divider -->
    <div class="flex items-center my-6">
      <div class="border-t border-gray-300 flex-grow"></div>
      <span class="flex-shrink-0 px-4 text-gray-500 text-sm">or</span>
      <div class="border-t border-gray-300 flex-grow"></div>
    </div>

    <!-- Create Account Link -->
    <div class="text-center">
      <p class="text-gray-600">
        Don't have an account? 
        <a 
          href="sign-up.php" 
          class="text-yellow-500 hover:text-yellow-400 font-semibold transition-colors duration-200"
        >
          Create New Account
        </a>
      </p>
    </div>
  </div>
</div>

<?php include ('includes/footer.php'); ?>
</body>
</html>