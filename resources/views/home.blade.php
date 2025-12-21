@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center text-blue-900 mb-8">Welcome to Harees Jewellery</h1>
    
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <p class="text-lg text-gray-700 mb-6">
            Your Laravel migration is complete! This is a placeholder homepage.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="border border-gray-200 rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-yellow-600 mb-4">✅ What's Working</h2>
                <ul class="space-y-2 text-gray-700">
                    <li>✓ Laravel layouts and partials</li>
                    <li>✓ Authentication system</li>
                    <li>✓ Route definitions</li>
                    <li>✓ Controllers</li>
                    <li>✓ Database configuration</li>
                </ul>
            </div>
            
            <div class="border border-gray-200 rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">📋 Next Steps</h2>
                <ul class="space-y-2 text-gray-700">
                    <li>1. Copy .env.example to .env</li>
                    <li>2. Run: php artisan key:generate</li>
                    <li>3. Run: php artisan migrate</li>
                    <li>4. Convert remaining views</li>
                    <li>5. Test all functionality</li>
                </ul>
            </div>
        </div>
        
        <div class="mt-8 text-center">
            <a href="{{ route('login') }}" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-8 rounded-lg transition-colors duration-200">
                Go to Login
            </a>
        </div>
    </div>
</div>

{{-- Birthday/Anniversary Popup --}}
@if($showPopup ?? false)
<div id="celebrationPopup" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-70">
    <div class="relative bg-white rounded-xl shadow-2xl overflow-hidden w-full max-w-md mx-4 border-2 border-gold-500 transform transition-all duration-500 scale-100">
        <button onclick="closeCelebration()" class="absolute top-3 right-3 z-50 bg-gold-100 hover:bg-gold-200 rounded-full p-1 transition-all duration-200 shadow-md hover:shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="p-8 text-center relative z-10">
            <div class="text-6xl mb-4 animate-bounce">
                {{ $celebrationType == 'birthday' ? '🎂' : '💍' }}
            </div>
            
            <h3 class="text-3xl font-bold text-gold-600 mb-3">
                {{ $celebrationType == 'birthday' ? 'HAPPY BIRTHDAY!' : 'HAPPY ANNIVERSARY!' }}
            </h3>
            
            <p class="text-lg text-gray-700 mb-6">{{ $message }}</p>
            
            <a href="{{ route('products', ['celebration' => $celebrationType]) }}" class="inline-block px-8 py-3 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:from-yellow-500 hover:via-yellow-600 hover:to-yellow-700 text-white font-bold rounded-full transition-all duration-500 transform hover:scale-105 shadow-lg">
                SHOW MY SPECIAL OFFERS
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function closeCelebration() {
        const popup = document.getElementById('celebrationPopup');
        popup.style.opacity = '0';
        setTimeout(() => {
            popup.style.display = 'none';
        }, 300);
    }
    
    setTimeout(closeCelebration, 15000);
</script>
@endpush
@endif
@endsection
