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

<div class="min-h-screen flex items-center justify-center px-4 py-8 mt-8">
  <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-2xl">
    <!-- Header -->
    <div class="text-center mb-8">
      <h1 class="text-3xl font-bold text-gray-800 mb-2">Create Account</h1>
      <p class="text-gray-600">Fill in your details to create an account</p>

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

    <!-- Sign-up form -->
    <form method="POST" action="controller.php" class="space-y-4">
      <!-- Personal Details Section -->
      <div class="space-y-4">
        <!-- Full Name field (full width) -->
        <div>
          <label for="fullname" class="block text-gray-700 text-sm font-medium mb-1">
            Full Name <span class="text-red-500">*</span>
          </label>
          <input 
            type="text" 
            id="fullname" 
            name="fullname" 
            required
            pattern="[A-Za-z ]{3,50}"
            title="Name should be 3-50 characters long and contain only letters"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
            placeholder="Enter your full name"
          >
        </div>

        <!-- Other personal details in 2 columns -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Email field -->
          <div>
            <label for="email" class="block text-gray-700 text-sm font-medium mb-1">
              Email Address <span class="text-red-500">*</span>
            </label>
            <input 
              type="email" 
              id="email" 
              name="email" 
              required
              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
              title="Please enter a valid email address"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
              placeholder="Enter your email"
            >
          </div>

          <!-- Phone field -->
          <div>
            <label for="phone" class="block text-gray-700 text-sm font-medium mb-1">
              Phone Number <span class="text-red-500">*</span>
            </label>
            <input 
              type="tel" 
              id="phone" 
              name="phone" 
              required
              pattern="[0-9]{10}"
              title="Please enter a 10-digit phone number"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
              placeholder="Enter your phone number"
              oninput="this.value = this.value.replace(/[^0-9]/g, '')"
            />
          </div>

          <!-- 4-digit PIN field -->
          <div>
            <label for="pin" class="block text-gray-700 text-sm font-medium mb-1">
              4-digit Number PIN <span class="text-red-500">*</span>
            </label>
            <input 
              type="password" 
              id="pin" 
              name="pin" 
              required
              maxlength="4"
              pattern="\d{4}"
              title="PIN must be exactly 4 digits"
              oninput="this.value = this.value.replace(/[^0-9]/g, '')"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
              placeholder="Create a 4-digit PIN"
            >
          </div>

        <!-- Confirm 4-digit PIN field -->
          <div>
            <label for="confirm_pin" class="block text-gray-700 text-sm font-medium mb-1">
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
              oninput="this.value = this.value.replace(/[^0-9]/g, '')"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
              placeholder="Confirm your 4-digit PIN"
            >
          </div>

        </div>
      </div>

      <!-- Security Question Section -->
      <div class="pt-4">
        <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Security Question (For Password Recovery)</h3>
        <div class="grid grid-cols-1 gap-6">
          <!-- Security Question -->
          <div>
            <label for="security_question" class="block text-gray-700 text-sm font-medium mb-1">
              Security Question <span class="text-red-500">*</span>
            </label>
            <select 
              id="security_question" 
              name="security_question" 
              required
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
            >
              <option value="" disabled selected>Select a security question</option>
              <option value="What was your first pet's name?">What was your first pet's name?</option>
              <option value="What was the name of your first school?">What was the name of your first school?</option>
              <option value="What city were you born in?">What city were you born in?</option>
              <option value="What is your favorite book?">What is your favorite book?</option>
            </select>
          </div>

          <!-- Security Answer -->
          <div>
            <label for="security_answer" class="block text-gray-700 text-sm font-medium mb-1">
              Your Answer <span class="text-red-500">*</span>
            </label>
            <input 
              type="text" 
              id="security_answer" 
              name="security_answer" 
              required
              pattern="[A-Za-z0-9 ]{3,50}"
              title="Answer should be 3-50 characters long"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
              placeholder="Enter your answer"
            >
          </div>
        </div>
      </div>

      <!-- Address Section -->
      <div class="pt-4">
        <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Address Information</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Address Line 1 -->
          <div class="md:col-span-2">
            <label for="address1" class="block text-gray-700 text-sm font-medium mb-1">
              Address Line 1 <span class="text-red-500">*</span>
            </label>
            <input 
              type="text" 
              id="address1" 
              name="address1" 
              required
              pattern="[A-Za-z0-9 ,.-]{5,100}"
              title="Address should be 5-100 characters long"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
              placeholder="House/Flat No, Building"
            >
          </div>

          <!-- Address Line 2 -->
          <div class="md:col-span-2">
            <label for="address2" class="block text-gray-700 text-sm font-medium mb-1">
              Address Line 2
            </label>
            <input 
              type="text" 
              id="address2" 
              name="address2" 
              pattern="[A-Za-z0-9 ,.-]{0,100}"
              title="Address should be maximum 100 characters long"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
              placeholder="Street, Area"
            >
          </div>

          <!-- Town/Village/City -->
          <div>
            <label for="city" class="block text-gray-700 text-sm font-medium mb-1">
              Town/City <span class="text-red-500">*</span>
            </label>
            <input 
              type="text" 
              id="city" 
              name="city" 
              required
              pattern="[A-Za-z ]{3,50}"
              title="City name should be 3-50 characters long"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
              placeholder="Enter your city"
            >
          </div>

          <!-- State -->
          <div>
            <label for="state" class="block text-gray-700 text-sm font-medium mb-1">
              State <span class="text-red-500">*</span>
            </label>
            <input 
              type="text" 
              id="state" 
              name="state" 
              required
              pattern="[A-Za-z ]{3,50}"
              title="State name should be 3-50 characters long"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
              placeholder="Enter your state"
            >
          </div>

          <!-- Pincode -->
          <div>
            <label for="pincode" class="block text-gray-700 text-sm font-medium mb-1">
              Pincode <span class="text-red-500">*</span>
            </label>
            <input 
              type="number" 
              id="pincode" 
              name="pincode" 
              required
              pattern="[0-9]{6}"
              title="Pincode must be 6 digits"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
              placeholder="Enter your pincode"
            >
          </div>

          <!-- Landmark -->
          <div>
            <label for="landmark" class="block text-gray-700 text-sm font-medium mb-1">
              Landmark
            </label>
            <input 
              type="text" 
              id="landmark" 
              name="landmark" 
              pattern="[A-Za-z0-9 ,.-]{0,50}"
              title="Landmark should be maximum 50 characters long"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
              placeholder="Nearby famous location"
            >
          </div>
        </div>
      </div>

      <!-- Terms and conditions -->
      <div class="flex items-start pt-4">
        <input 
          type="checkbox" 
          id="terms" 
          name="terms" 
          required
          class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 mt-1"
        >
        <label for="terms" class="ml-2 text-gray-700 text-sm">
          I agree to the 
          <a href="terms-and-conditions" class="text-blue-600 hover:text-blue-800 transition-colors duration-200">Terms and Conditions</a> 
          and 
          <a href="privacy-policy" class="text-blue-600 hover:text-blue-800 transition-colors duration-200">Privacy Policy</a>
          <span class="text-red-500">*</span>
        </label>
      </div>

      <!-- Sign-up button -->
      <button 
        type="submit" 
        name="signup"
        class="w-full bg-yellow-400 text-white font-semibold py-3 px-4 rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105 mt-6"
      >
        Create Account
      </button>
    </form>

    <!-- Divider and Login Link -->
    <div class="flex items-center my-6">
      <div class="border-t border-gray-300 flex-grow"></div>
      <span class="flex-shrink-0 px-4 text-gray-500 text-sm">or</span>
      <div class="border-t border-gray-300 flex-grow"></div>
    </div>

    <div class="text-center">
      <p class="text-gray-600">
        Already have an account? 
        <a 
          href="sign-in" 
          class="text-yellow-500 hover:text-yellow-400 font-semibold transition-colors duration-200"
        >
          Login Here
        </a>
      </p>
    </div>
  </div>
</div>

<!-- ###################################--END--########################################## -->

<?php include ('includes/footer.php'); ?>
</body>
</html>