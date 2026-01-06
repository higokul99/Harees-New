@extends('layouts.app')

@push('styles')
<style>
  @keyframes fadeIn {
    0% {
      opacity: 0;
      transform: translateY(10px);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slideUp {
    0% {
      transform: translateY(10px);
      opacity: 0;
    }

    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }

  .animate-fade-in {
    animation: fadeIn 0.5s ease-in-out;
  }

  .animate-slide-up {
    animation: slideUp 0.3s ease-out;
  }
</style>
@endpush

@section('content')
<div class="relative w-full">
  <div class="relative overflow-hidden pt-24 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-fade-in">
      <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-slate-900 mb-4">
        Our Store Locations
      </h1>
      <p class="text-gray-600 text-lg">Visit us to experience our exquisite jewelry collections in person</p>
    </div>
  </div>
</div>

<div class="py-8">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @php
      $stores = [
      ['key' => 'paravur', 'badge' => 'Popular Store', 'badge_class' => 'from-yellow-400 to-amber-500 text-blue-900', 'description' => 'Our premier location featuring our complete collection of fine jewelry and gemstones.'],
      ['key' => 'koottikkada', 'badge' => null, 'badge_class' => '', 'description' => 'Our exclusive location specializing in diamond and precious gemstone jewelry.'],
      ['key' => 'chinnakada', 'badge' => 'New Location', 'badge_class' => 'from-blue-900 to-slate-900 text-yellow-400', 'description' => 'Our newest location showcasing contemporary designs and custom jewelry services.'],
      ];
      @endphp

      @foreach($stores as $storeInfo)
      @php $store = config("shop.stores.{$storeInfo['key']}"); @endphp
      <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden border border-yellow-400/20 animate-fade-in">
        <div class="h-64 relative">
          <img src="{{ asset('assets/store.jpg') }}" alt="{{ $store['name'] }}" class="w-full h-full object-cover">
          @if($storeInfo['badge'])
          <div class="absolute top-4 left-4 bg-gradient-to-r {{ $storeInfo['badge_class'] }} px-4 py-2 font-bold rounded-lg shadow-lg">{{ $storeInfo['badge'] }}</div>
          @endif
        </div>
        <div class="p-8">
          <h3 class="text-2xl font-bold text-slate-900 mb-3">{{ ucfirst($storeInfo['key']) }}, {{ $store['city'] }}</h3>
          <p class="text-gray-600 mb-6">{{ $storeInfo['description'] }}</p>

          <div class="mb-6">
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-blue-900 to-slate-900 rounded-full flex items-center justify-center">
                <i class="fas fa-map-marker-alt text-yellow-400 text-sm"></i>
              </div>
              Address:
            </h4>
            <p class="text-gray-600 pl-10">
              {{ $store['address_line1'] }}<br>
              {{ $store['address_line2'] }}<br>
              {{ $store['city'] }}, {{ $store['state'] }}@if(isset($store['pincode'])) - {{ $store['pincode'] }}@endif
            </p>
            <a href="{{ $store['map_url'] }}" target="_blank" class="inline-flex items-center text-yellow-400 hover:text-amber-600 mt-3 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              View on Google Maps
            </a>
          </div>

          <div class="mb-6">
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-blue-900 to-slate-900 rounded-full flex items-center justify-center">
                <i class="fas fa-phone-alt text-yellow-400 text-sm"></i>
              </div>
              Contact:
            </h4>
            <div class="flex items-center mb-2 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <a href="tel:{{ str_replace([' ', '-'], '', $store['phone1']) }}" class="text-gray-600 hover:text-yellow-400">{{ $store['phone1'] }}</a>
            </div>
            <div class="flex items-center mb-2 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <a href="tel:{{ str_replace([' ', '-'], '', $store['phone2']) }}" class="text-gray-600 hover:text-yellow-400">{{ $store['phone2'] }}</a>
            </div>
            <div class="flex items-center pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
              </svg>
              <a href="https://wa.me/{{ str_replace(['+', ' ', '-'], '', $store['whatsapp']) }}" class="text-gray-600 hover:text-green-600">{{ $store['whatsapp'] }} (WhatsApp)</a>
            </div>
          </div>

          <div>
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-blue-900 to-slate-900 rounded-full flex items-center justify-center">
                <i class="fas fa-clock text-yellow-400 text-sm"></i>
              </div>
              Hours:
            </h4>
            <p class="text-gray-600 pl-10">
              Monday - Saturday: 10:00 AM - 8:00 PM<br>
              Sunday: 10:00 AM - 8:00 PM
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection