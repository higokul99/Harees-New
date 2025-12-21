{{-- Navbar is very large - keeping a simplified version for now --}}
{{-- You can expand this based on your needs --}}
<nav class="fixed z-50 top-15 w-full border-gray-200 flex justify-center" style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #fbbf24 100%);">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-2 md:p-4">
        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse ml-auto">
            <button data-collapse-toggle="mega-menu-icons" type="button"
                    class="inline-flex items-center p-1 w-8 h-8 justify-center text-sm text-yellow-600 rounded-lg md:hidden hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-gray-200" 
                    aria-controls="mega-menu-icons" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" 
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        {{-- Main Navigation Links --}}
        <div id="mega-menu-icons" class="items-center justify-center hidden w-full mx-10 md:flex md:w-auto md:order-1">
            <ul class="flex flex-col items-center justify-center mt-4 font-medium md:flex-row md:mt-0 md:space-x-8">
                <li><a href="{{ route('products', ['type' => 'diamond']) }}" class="text-blue-900 hover:text-blue-600">Diamond</a></li>
                <li><a href="{{ route('products', ['type' => '18k']) }}" class="text-blue-900 hover:text-blue-600">18K Gold</a></li>
                <li><a href="{{ route('products', ['type' => '22k']) }}" class="text-blue-900 hover:text-blue-600">22K (916) Gold</a></li>
                <li><a href="{{ route('products', ['type' => 'silver']) }}" class="text-blue-900 hover:text-blue-600">Silver Jewelry</a></li>
                <li><a href="{{ route('products', ['type' => 'platinum']) }}" class="text-blue-900 hover:text-blue-600">Platinum</a></li>
            </ul>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle mega menu toggle
        const dropdownButtons = document.querySelectorAll('[data-dropdown-toggle]');
        dropdownButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetId = this.getAttribute('data-dropdown-toggle');
                const targetDropdown = document.getElementById(targetId);
                if (targetDropdown) {
                    targetDropdown.classList.toggle('hidden');
                }
            });
        });

        // Handle mobile menu toggle
        const mobileMenuButton = document.querySelector('[data-collapse-toggle="mega-menu-icons"]');
        const mobileMenu = document.getElementById('mega-menu-icons');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>
@endpush
