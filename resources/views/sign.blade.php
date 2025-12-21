@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
        {{-- Header --}}
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Login</h1>

            {{-- Error message display --}}
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" onclick="this.parentElement.parentElement.style.display='none'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                        </svg>
                    </span>
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
        </div>

        {{-- Login form --}}
        <form method="POST" action="{{ route('login.post') }}" class="space-y-6" id="loginForm">
            @csrf
            
            {{-- Mobile Number field --}}
            <div>
                <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">
                    Mobile Number
                </label>
                <input type="text" id="phone" name="phone" required
                    pattern="\d{10}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all duration-200 @error('phone') border-red-500 @enderror"
                    placeholder="Enter your number"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                    value="{{ old('phone') }}"
                    title="Please enter exactly 10 digits">
                @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- PIN field --}}
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">
                    Password (4-Digit PIN)
                </label>
                <div class="pin-container">
                    <input type="password" class="pin-digit" data-index="0" maxlength="1" required>
                    <input type="password" class="pin-digit" data-index="1" maxlength="1" required>
                    <input type="password" class="pin-digit" data-index="2" maxlength="1" required>
                    <input type="password" class="pin-digit" data-index="3" maxlength="1" required>
                </div>
                {{-- Hidden input to store the complete PIN for form submission --}}
                <input type="hidden" name="password" id="hiddenPassword">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Remember me and forgot password --}}
            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-gray-700 text-sm">Remember me</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-yellow-600 hover:text-yellow-400 text-sm transition-colors duration-200">
                    Forgot password?
                </a>
            </div>

            {{-- Login button --}}
            <button 
                type="submit" 
                name="login"
                style="background-color: #facc15;"
                class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105"
            >
                Login
            </button>
        </form>

        {{-- Divider --}}
        <div class="flex items-center my-6">
            <div class="border-t border-gray-300 flex-grow"></div>
            <span class="flex-shrink-0 px-4 text-gray-500 text-sm">or</span>
            <div class="border-t border-gray-300 flex-grow"></div>
        </div>

        {{-- Create Account Link --}}
        <div class="text-center">
            <p class="text-gray-600">
                Don't have an account? 
                <a 
                    href="{{ route('register') }}" 
                    class="text-yellow-500 hover:text-yellow-400 font-semibold transition-colors duration-200"
                >
                    Create New Account
                </a>
            </p>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* PIN Input Styles */
.pin-container {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin: 10px 0;
}

.pin-digit {
    width: 50px;
    height: 50px;
    border: 2px solid #d1d5db;
    border-radius: 8px;
    text-align: center;
    font-size: 1.5em;
    font-weight: bold;
    color: #374151;
    transition: all 0.3s ease;
    background: #f9fafb;
}

.pin-digit:focus {
    outline: none;
    border-color: #facc15;
    background: white;
    transform: scale(1.05);
    box-shadow: 0 0 0 3px rgba(250, 204, 21, 0.1);
}

.pin-digit.filled {
    background: #fef3c7;
    border-color: #f59e0b;
}

@media (max-width: 768px) {
    .pin-container {
        gap: 8px;
    }
    
    .pin-digit {
        width: 45px;
        height: 45px;
        font-size: 1.3em;
    }
}
</style>
@endpush

@push('scripts')
<script>
class PinInput {
    constructor() {
        this.pinDigits = document.querySelectorAll('.pin-digit');
        this.currentPin = ['', '', '', ''];
        this.currentIndex = 0;
        this.hiddenInput = document.getElementById('hiddenPassword');
        
        this.init();
    }

    init() {
        this.pinDigits.forEach((input, index) => {
            // Add event listeners
            input.addEventListener('input', (e) => this.handleInput(e, index));
            input.addEventListener('keydown', (e) => this.handleKeydown(e, index));
            input.addEventListener('focus', (e) => this.handleFocus(e, index));
            input.addEventListener('paste', (e) => this.handlePaste(e, index));
            
            input.addEventListener('click', () => {
                input.select();
            });
        });

        // Focus first input
        this.pinDigits[0].focus();
    }

    handleInput(event, index) {
        const input = event.target;
        let value = input.value;
        
        // Allow only digits
        value = value.replace(/[^0-9]/g, '');
        
        if (value.length > 1) {
            value = value.slice(-1);
        }
        
        input.value = value;
        this.currentPin[index] = value;
        
        // Update visual state
        if (value) {
            input.classList.add('filled');
            // Move to next input if not the last one
            if (index < 3) {
                this.focusInput(index + 1);
            }
        } else {
            input.classList.remove('filled');
        }
        
        this.updateHiddenInput();
    }

    handleKeydown(event, index) {
        const input = event.target;
        
        switch(event.key) {
            case 'Backspace':
                event.preventDefault();
                if (input.value) {
                    input.value = '';
                    this.currentPin[index] = '';
                    input.classList.remove('filled');
                } else if (index > 0) {
                    const prevInput = this.pinDigits[index - 1];
                    prevInput.value = '';
                    this.currentPin[index - 1] = '';
                    prevInput.classList.remove('filled');
                    this.focusInput(index - 1);
                }
                this.updateHiddenInput();
                break;
                
            case 'Delete':
                event.preventDefault();
                input.value = '';
                this.currentPin[index] = '';
                input.classList.remove('filled');
                this.updateHiddenInput();
                break;
                
            case 'ArrowLeft':
                event.preventDefault();
                if (index > 0) {
                    this.focusInput(index - 1);
                }
                break;
                
            case 'ArrowRight':
                event.preventDefault();
                if (index < 3) {
                    this.focusInput(index + 1);
                }
                break;
                
            default:
                if (!/[0-9]/.test(event.key) && !['Tab', 'Shift'].includes(event.key)) {
                    event.preventDefault();
                }
                break;
        }
    }

    handleFocus(event, index) {
        this.currentIndex = index;
        event.target.select();
    }

    handlePaste(event, index) {
        event.preventDefault();
        const paste = (event.clipboardData || window.clipboardData).getData('text');
        const digits = paste.replace(/[^0-9]/g, '').split('').slice(0, 4);
        
        digits.forEach((digit, i) => {
            if (index + i < 4) {
                const input = this.pinDigits[index + i];
                input.value = digit;
                this.currentPin[index + i] = digit;
                input.classList.add('filled');
            }
        });
        
        const nextIndex = Math.min(index + digits.length, 3);
        this.focusInput(nextIndex);
        this.updateHiddenInput();
    }

    focusInput(index) {
        if (index >= 0 && index < 4) {
            this.pinDigits[index].focus();
            this.currentIndex = index;
        }
    }

    getPin() {
        return this.currentPin.join('');
    }

    updateHiddenInput() {
        this.hiddenInput.value = this.getPin();
    }

    isComplete() {
        return this.currentPin.every(digit => digit !== '') && this.currentPin.length === 4;
    }
}

// Initialize PIN input system
document.addEventListener('DOMContentLoaded', function() {
    const pinInput = new PinInput();
    
    // Form validation before submission
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        if (!pinInput.isComplete()) {
            e.preventDefault();
            alert('Please enter complete 4-digit PIN');
            return false;
        }
    });
});
</script>
@endpush

<head>
<style>
/* PIN Input Styles */
.pin-container {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin: 10px 0;
}

.pin-digit {
    width: 50px;
    height: 50px;
    border: 2px solid #d1d5db;
    border-radius: 8px;
    text-align: center;
    font-size: 1.5em;
    font-weight: bold;
    color: #374151;
    transition: all 0.3s ease;
    background: #f9fafb;
}

.pin-digit:focus {
    outline: none;
    border-color: #facc15;
    background: white;
    transform: scale(1.05);
    box-shadow: 0 0 0 3px rgba(250, 204, 21, 0.1);
}

.pin-digit.filled {
    background: #fef3c7;
    border-color: #f59e0b;
}

@media (max-width: 768px) {
    .pin-container {
        gap: 8px;
    }
    
    .pin-digit {
        width: 45px;
        height: 45px;
        font-size: 1.3em;
    }
}
</style>
</head>
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
    <form method="POST" action="controller.php" class="space-y-6" id="loginForm">
      <!-- Mobile Number field -->
      <div>
        <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">
          Mobile Number
        </label>
        <input type="text" id="phone" name="phone" required
            pattern="\d{10}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all duration-200"
            placeholder="Enter your number"
            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
            title="Please enter exactly 10 digits">
      </div>

      <!-- PIN field -->
      <div>
        <label class="block text-gray-700 text-sm font-medium mb-2">
          Password (4-Digit PIN)
        </label>
        <div class="pin-container">
          <input type="password" class="pin-digit" data-index="0" maxlength="1" required>
          <input type="password" class="pin-digit" data-index="1" maxlength="1" required>
          <input type="password" class="pin-digit" data-index="2" maxlength="1" required>
          <input type="password" class="pin-digit" data-index="3" maxlength="1" required>
        </div>
        <!-- Hidden input to store the complete PIN for form submission -->
        <input type="hidden" name="password" id="hiddenPassword">
      </div>

      <!-- Remember me and forgot password -->
      <div class="flex items-center justify-between">
        <label class="flex items-center">
          <input type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
          <span class="ml-2 text-gray-700 text-sm">Remember me</span>
        </label>
        <a href="sign-forget" class="text-yellow-600 hover:text-yellow-400 text-sm transition-colors duration-200">
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
          href="sign-up" 
          class="text-yellow-500 hover:text-yellow-400 font-semibold transition-colors duration-200"
        >
          Create New Account
        </a>
      </p>
    </div>
  </div>
</div>

<script>
class PinInput {
    constructor() {
        this.pinDigits = document.querySelectorAll('.pin-digit');
        this.currentPin = ['', '', '', ''];
        this.currentIndex = 0;
        this.hiddenInput = document.getElementById('hiddenPassword');
        
        this.init();
    }

    init() {
        this.pinDigits.forEach((input, index) => {
            // Add event listeners
            input.addEventListener('input', (e) => this.handleInput(e, index));
            input.addEventListener('keydown', (e) => this.handleKeydown(e, index));
            input.addEventListener('focus', (e) => this.handleFocus(e, index));
            input.addEventListener('paste', (e) => this.handlePaste(e, index));
            
            input.addEventListener('click', () => {
                input.select();
            });
        });

        // Focus first input
        this.pinDigits[0].focus();
    }

    handleInput(event, index) {
        const input = event.target;
        let value = input.value;
        
        // Allow only digits
        value = value.replace(/[^0-9]/g, '');
        
        if (value.length > 1) {
            value = value.slice(-1);
        }
        
        input.value = value;
        this.currentPin[index] = value;
        
        // Update visual state
        if (value) {
            input.classList.add('filled');
            // Move to next input if not the last one
            if (index < 3) {
                this.focusInput(index + 1);
            }
        } else {
            input.classList.remove('filled');
        }
        
        this.updateHiddenInput();
    }

    handleKeydown(event, index) {
        const input = event.target;
        
        switch(event.key) {
            case 'Backspace':
                event.preventDefault();
                if (input.value) {
                    input.value = '';
                    this.currentPin[index] = '';
                    input.classList.remove('filled');
                } else if (index > 0) {
                    const prevInput = this.pinDigits[index - 1];
                    prevInput.value = '';
                    this.currentPin[index - 1] = '';
                    prevInput.classList.remove('filled');
                    this.focusInput(index - 1);
                }
                this.updateHiddenInput();
                break;
                
            case 'Delete':
                event.preventDefault();
                input.value = '';
                this.currentPin[index] = '';
                input.classList.remove('filled');
                this.updateHiddenInput();
                break;
                
            case 'ArrowLeft':
                event.preventDefault();
                if (index > 0) {
                    this.focusInput(index - 1);
                }
                break;
                
            case 'ArrowRight':
                event.preventDefault();
                if (index < 3) {
                    this.focusInput(index + 1);
                }
                break;
                
            default:
                if (!/[0-9]/.test(event.key) && !['Tab', 'Shift'].includes(event.key)) {
                    event.preventDefault();
                }
                break;
        }
    }

    handleFocus(event, index) {
        this.currentIndex = index;
        event.target.select();
    }

    handlePaste(event, index) {
        event.preventDefault();
        const paste = (event.clipboardData || window.clipboardData).getData('text');
        const digits = paste.replace(/[^0-9]/g, '').split('').slice(0, 4);
        
        digits.forEach((digit, i) => {
            if (index + i < 4) {
                const input = this.pinDigits[index + i];
                input.value = digit;
                this.currentPin[index + i] = digit;
                input.classList.add('filled');
            }
        });
        
        const nextIndex = Math.min(index + digits.length, 3);
        this.focusInput(nextIndex);
        this.updateHiddenInput();
    }

    focusInput(index) {
        if (index >= 0 && index < 4) {
            this.pinDigits[index].focus();
            this.currentIndex = index;
        }
    }

    getPin() {
        return this.currentPin.join('');
    }

    updateHiddenInput() {
        this.hiddenInput.value = this.getPin();
    }

    isComplete() {
        return this.currentPin.every(digit => digit !== '') && this.currentPin.length === 4;
    }
}

// Initialize PIN input system
document.addEventListener('DOMContentLoaded', function() {
    const pinInput = new PinInput();
    
    // Form validation before submission
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        if (!pinInput.isComplete()) {
            e.preventDefault();
            alert('Please enter complete 4-digit PIN');
            return false;
        }
    });
});
</script>

<?php include ('includes/footer.php'); ?>
</body>
</html>