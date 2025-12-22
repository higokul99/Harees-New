@extends('layouts.app')

@push('styles')
<style>
    /* Custom animations matching the original design */
    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(10px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideUp {
        0% { transform: translateY(10px); opacity: 0; }
        100% { transform: translateY(0); opacity: 1; }
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
<main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-12 animate-fade-in">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-900 to-slate-900 bg-clip-text text-transparent mb-4">
                My Profile
            </h1>
            <p class="text-gray-600 text-lg">Manage your personal information and preferences</p>
        </div>

        @if(session('msg') || session('success') || session('error'))
            <div class="mb-8 p-6 bg-gradient-to-r {{ session('error') ? 'from-red-100 to-red-200 border-red-200' : 'from-yellow-400/20 to-amber-200/30 border-yellow-400/30' }} text-blue-900 rounded-2xl shadow-lg animate-slide-up border-2">
                <div class="flex items-center gap-3">
                    <i class="fas {{ session('error') ? 'fa-exclamation-circle text-red-600' : 'fa-check-circle text-yellow-400' }} text-xl"></i>
                    <span class="font-medium">{{ session('msg') ?? session('success') ?? session('error') }}</span>
                </div>
            </div>
        @endif

        @auth
        @php $user = Auth::user(); @endphp
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Profile Content -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Personal Information Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                            <div>
                                <h2 class="text-2xl font-bold text-slate-900 flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-user text-blue-900 text-lg"></i>
                                    </div>
                                    Personal Information
                                </h2>
                                <p class="text-gray-600 mt-2">Update your contact details and personal information</p>
                            </div>
                            <button onclick="toggleForm('contactForm')" class="group mt-4 sm:mt-0 bg-gradient-to-r from-blue-900 to-slate-900 text-white px-6 py-3 rounded-xl hover:from-slate-900 hover:to-blue-900 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-2">
                                <i class="fas fa-edit group-hover:rotate-12 transition-transform"></i>
                                Edit Details
                            </button>
                        </div>

                        <!-- Display Mode -->
                        <div id="contactDisplay" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2 relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-signature text-blue-900"></i>
                                        <p class="text-sm font-medium text-gray-600">Full Name</p>
                                    </div>
                                    <p class="font-semibold text-slate-900 text-lg">{{ $user->fullname }}</p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-envelope text-blue-900"></i>
                                        <p class="text-sm font-medium text-gray-600">Email Address</p>
                                    </div>
                                    <p class="font-semibold text-slate-900 text-lg">{{ $user->email }}</p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-mobile-alt text-blue-900"></i>
                                        <p class="text-sm font-medium text-gray-600">Phone Number</p>
                                    </div>
                                    <p class="font-semibold text-slate-900 text-lg">{{ $user->phone }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Form (Hidden by default) -->
                        <form id="contactForm" action="{{ route('profile.update') }}" method="POST" class="hidden mt-8 animate-slide-up">
                            @csrf
                            <input type="hidden" name="section" value="personal">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2 relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                    </div>
                                    <input type="text" name="fullname" value="{{ old('fullname', $user->fullname) }}" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-blue-900 font-medium">Full Name</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                    </div>
                                    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none" readonly>
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-blue-900 font-medium">Email Address (Read only)</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-mobile-alt text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                    </div>
                                    <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none" readonly>
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-blue-900 font-medium">Phone Number (Read only)</label>
                                </div>
                            </div>
                            
                            <div class="flex justify-end gap-4 mt-8">
                                <button type="button" onclick="toggleForm('contactForm')" class="px-6 py-3 bg-white border-2 border-yellow-400/30 text-blue-900 rounded-xl hover:bg-yellow-400/10 hover:border-yellow-400 transition-all duration-300">
                                    Cancel
                                </button>
                                <button type="submit" class="px-6 py-3 bg-gradient-to-r from-yellow-400 to-amber-500 text-blue-900 font-semibold rounded-xl hover:from-amber-400 hover:to-yellow-400 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Address Information Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                            <div>
                                <h2 class="text-2xl font-bold text-slate-900 flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-map-marker-alt text-yellow-400 text-lg"></i>
                                    </div>
                                    Address Information
                                </h2>
                                <p class="text-gray-600 mt-2">Manage your delivery addresses and location details</p>
                            </div>
                            <button onclick="toggleForm('addressForm')" class="group mt-4 sm:mt-0 bg-gradient-to-r from-yellow-400 to-amber-500 text-blue-900 px-6 py-3 rounded-xl hover:from-amber-400 hover:to-yellow-400 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-2">
                                <i class="fas fa-edit group-hover:rotate-12 transition-transform"></i>
                                Edit Address
                            </button>
                        </div>

                        <!-- Display Mode -->
                        <div id="addressDisplay" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2 relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-home text-blue-900"></i>
                                        <p class="text-sm font-medium text-gray-600">Address Line 1</p>
                                    </div>
                                    <p class="font-semibold text-slate-900 text-lg">{{ $user->address1 ?: 'Not specified' }}</p>
                                </div>
                            </div>
                            
                            <div class="md:col-span-2 relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-building text-blue-900"></i>
                                        <p class="text-sm font-medium text-gray-600">Address Line 2</p>
                                    </div>
                                    <p class="font-semibold text-slate-900 text-lg">{{ $user->address2 ?: 'Not specified' }}</p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-city text-blue-900"></i>
                                        <p class="text-sm font-medium text-gray-600">City</p>
                                    </div>
                                    <p class="font-semibold text-slate-900 text-lg">{{ $user->city ?: 'Not specified' }}</p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-map text-blue-900"></i>
                                        <p class="text-sm font-medium text-gray-600">State</p>
                                    </div>
                                    <p class="font-semibold text-slate-900 text-lg">{{ $user->state ?: 'Not specified' }}</p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-map-pin text-blue-900"></i>
                                        <p class="text-sm font-medium text-gray-600">Pincode</p>
                                    </div>
                                    <p class="font-semibold text-slate-900 text-lg">{{ $user->pincode ?: 'Not specified' }}</p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/10 to-amber-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-landmark text-blue-900"></i>
                                        <p class="text-sm font-medium text-gray-600">Landmark</p>
                                    </div>
                                    <p class="font-semibold text-slate-900 text-lg">{{ $user->landmark ?: 'Not specified' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Form (Hidden by default) -->
                        <form id="addressForm" action="{{ route('profile.update') }}" method="POST" class="hidden mt-8 animate-slide-up">
                            @csrf
                            <input type="hidden" name="section" value="address">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2 relative group">
                                    <div class="absolute top-4 left-0 pl-4 pointer-events-none">
                                        <i class="fas fa-home text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                    </div>
                                    <textarea name="address1" rows="3" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none resize-none">{{ old('address1', $user->address1) }}</textarea>
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-blue-900 font-medium">Address Line 1</label>
                                </div>
                                
                                <div class="md:col-span-2 relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-building text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                    </div>
                                    <input type="text" name="address2" value="{{ old('address2', $user->address2) }}" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-blue-900 font-medium">Address Line 2</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-landmark text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                    </div>
                                    <input type="text" name="landmark" value="{{ old('landmark', $user->landmark) }}" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-blue-900 font-medium">Landmark</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-city text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                    </div>
                                    <input type="text" name="city" value="{{ old('city', $user->city) }}" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-blue-900 font-medium">City</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-map text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                    </div>
                                    <input type="text" name="state" value="{{ old('state', $user->state) }}" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-blue-900 font-medium">State</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-map-pin text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                    </div>
                                    <input type="text" name="pincode" value="{{ old('pincode', $user->pincode) }}" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none">
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-blue-900 font-medium">Pincode</label>
                                </div>
                            </div>
                            
                            <div class="flex justify-end gap-4 mt-8">
                                <button type="button" onclick="toggleForm('addressForm')" class="px-6 py-3 bg-white border-2 border-yellow-400/30 text-blue-900 rounded-xl hover:bg-yellow-400/10 hover:border-yellow-400 transition-all duration-300">
                                    Cancel
                                </button>
                                <button type="submit" class="px-6 py-3 bg-gradient-to-r from-yellow-400 to-amber-500 text-blue-900 font-semibold rounded-xl hover:from-amber-400 hover:to-yellow-400 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Special Dates Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                            <div>
                                <h2 class="text-2xl font-bold text-slate-900 flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-heart text-blue-900 text-lg"></i>
                                    </div>
                                    Special Dates
                                </h2>
                                <p class="text-gray-600 mt-2">Add your birthday and anniversary for special offers</p>
                            </div>
                            <button onclick="toggleForm('datesForm')" class="group mt-4 sm:mt-0 bg-gradient-to-r from-blue-900 to-slate-900 text-white px-6 py-3 rounded-xl hover:from-slate-900 hover:to-blue-900 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-2">
                                <i class="fas fa-edit group-hover:rotate-12 transition-transform"></i>
                                Edit Dates
                            </button>
                        </div>

                        <!-- Display Mode -->
                        <div id="datesDisplay" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-rose-100/20 to-pink-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-birthday-cake text-rose-600"></i>
                                        <p class="text-sm font-medium text-gray-600">Birthday</p>
                                    </div>
                                    <p class="font-semibold text-slate-900 text-lg">
                                        {{ $user->dob && $user->dob != '1970-01-01' ? \Carbon\Carbon::parse($user->dob)->format('F j, Y') : 'Not specified' }}
                                    </p>
                                </div>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-rose-100/20 to-pink-100/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fas fa-heart text-rose-600"></i>
                                        <p class="text-sm font-medium text-gray-600">Anniversary</p>
                                    </div>
                                    <p class="font-semibold text-slate-900 text-lg">
                                        {{ $user->anniversary ? \Carbon\Carbon::parse($user->anniversary)->format('F j, Y') : 'Not specified' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Form (Hidden by default) -->
                        <form id="datesForm" action="{{ route('profile.update') }}" method="POST" class="hidden mt-8 animate-slide-up">
                            @csrf
                            <input type="hidden" name="section" value="dates">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-birthday-cake text-rose-600 group-focus-within:text-rose-700 transition-colors"></i>
                                    </div>
                                    @php
                                        // Calculate the maximum date (12 years ago from today)
                                        $maxDate = \Carbon\Carbon::now()->subYears(12)->format('Y-m-d');
                                    @endphp

                                    <input type="date" 
                                        name="dob" 
                                        value="{{ old('dob', ($user->dob && $user->dob != '1970-01-01' ? $user->dob : '')) }}" 
                                        max="{{ $maxDate }}"
                                        class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-rose-200 rounded-xl focus:border-rose-500 focus:ring-4 focus:ring-rose-200 transition-all duration-300 hover:shadow-md focus:outline-none"
                                        onchange="validateAge(this)"
                                        required>
                                    <label class="absolute -top-2 left-3 px-2 bg-white text-xs text-rose-600 font-medium">Birthday</label>
                                </div>
                                
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-heart text-rose-600 group-focus-within:text-rose-700 transition-colors"></i>
                                    </div>
                                    <input type="date" name="anniversary" value="{{ old('anniversary', $user->anniversary) }}" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-rose-200 rounded-xl focus:border-rose-500 focus:ring-4 focus:ring-rose-200 transition-all duration-300 hover:shadow-md focus:outline-none">
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
                <div class="sticky top-24 space-y-6">
                    <!-- Quick Navigation Card -->
                    <div class="bg-gradient-to-br from-yellow-400 via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-blue-900 animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-blue-900 flex items-center gap-2">
                                <i class="fas fa-compass"></i>
                                QUICK ACCESS
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <a href="{{ route('orders') }}" class="block w-full bg-white/20 backdrop-blur-sm text-blue-900 font-bold py-4 px-6 rounded-xl hover:bg-white/30 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-shopping-bag text-blue-900 group-hover:scale-110 transition-transform"></i>
                                    <span>MY ORDERS</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                            
                            <a href="{{ route('schemes.enroll') }}" class="block w-full bg-white/20 backdrop-blur-sm text-blue-900 font-bold py-4 px-6 rounded-xl hover:bg-white/30 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-coins text-blue-900 group-hover:scale-110 transition-transform"></i>
                                    <span>GOLD SCHEME</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Account Security Card -->
                    <div class="bg-gradient-to-br from-blue-900 via-slate-900 to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-yellow-400 flex items-center gap-2">
                                <i class="fas fa-shield-halved"></i>
                                ACCOUNT SECURITY
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between items-center">
                                <span class="text-white/90 flex items-center gap-2">
                                    <i class="fas fa-key text-yellow-400 text-sm"></i>
                                    Password Protection
                                </span>
                                <span class="text-green-400 text-sm font-semibold">Active</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-white/90 flex items-center gap-2">
                                    <i class="fas fa-user-check text-yellow-400 text-sm"></i>
                                    Account Verified
                                </span>
                                <span class="text-green-400 text-sm font-semibold">Yes</span>
                            </div>
                        </div>

                        <button onclick="handlePasswordFormToggle()" class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-blue-900 font-bold py-4 rounded-xl hover:from-amber-400 hover:to-yellow-400 transition-all duration-300 transform hover:scale-105 hover:shadow-lg mb-6">
                            CHANGE PASSWORD
                        </button>

                        <!-- Contact Info -->
                        <div class="text-center text-white/90 text-sm">
                            <p class="mb-2">Need Help?</p>
                            <p>Please call us at <a href="tel:{{ config('shop.contact.phone') }}" class="font-semibold text-yellow-400 hover:underline">{{ config('shop.contact.phone') }}</a></p>
                        </div>
                    </div>

                   <!-- Trust Indicators -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-yellow-400/20 animate-slide-up">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center group">
                                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                    <i class="fas fa-gem text-blue-900 text-lg"></i>
                                </div>
                                <p class="text-xs font-semibold text-slate-900 leading-tight">PREMIUM<br>MEMBER</p>
                            </div>
                            <div class="text-center group">
                                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-blue-900 to-slate-900 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                    <i class="fas fa-handshake text-yellow-400 text-lg"></i>
                                </div>
                                <p class="text-xs font-semibold text-slate-900 leading-tight">TRUSTED<br>CUSTOMER</p>
                            </div>
                            <div class="text-center group">
                                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                    <i class="fas fa-lock text-blue-900 text-lg"></i>
                                </div>
                                <p class="text-xs font-semibold text-slate-900 leading-tight">SECURE<br>ACCOUNT</p>
                            </div>
                            <div class="text-center group">
                                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-blue-900 to-blue-800 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                    <i class="fas fa-headset text-yellow-400 text-lg"></i>
                                </div>
                                <p class="text-xs font-semibold text-slate-900 leading-tight">24/7<br>SUPPORT</p>
                            </div>
                        </div>
                    </div>

                    <!-- Password Change Form (Hidden by default) -->
                    <form id="passwordForm" action="{{ route('profile.update') }}" method="POST" class="hidden bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-yellow-400/20 animate-slide-up">
                        @csrf
                        <input type="hidden" name="section" value="password">
                        <h3 class="text-xl font-bold text-slate-900 mb-6">Change Password</h3>
                        
                        <div class="space-y-4">
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                </div>
                                <input type="password" name="current_password" placeholder="Current Password" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none" required>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-key text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                </div>
                                <input type="password" name="new_password" placeholder="New Password" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none" required>
                            </div>
                            
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-key text-blue-900 group-focus-within:text-slate-900 transition-colors"></i>
                                </div>
                                <input type="password" name="new_password_confirmation" placeholder="Confirm New Password" class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-yellow-400/30 rounded-xl focus:border-blue-900 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 hover:shadow-md focus:outline-none" required>
                            </div>
                        </div>
                        
                        <div class="flex justify-end gap-4 mt-6">
                            <button type="button" onclick="handlePasswordFormToggle()" class="px-6 py-3 bg-white border-2 border-yellow-400/30 text-blue-900 rounded-xl hover:bg-yellow-400/10 hover:border-yellow-400 transition-all duration-300">
                                Cancel
                            </button>
                            <button type="submit" class="px-6 py-3 bg-gradient-to-r from-yellow-400 to-amber-500 text-blue-900 font-semibold rounded-xl hover:from-amber-400 hover:to-yellow-400 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                Update Password
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        @else
            <div class="text-center py-12">
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 max-w-md mx-auto border border-yellow-400/20">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-red-500 to-rose-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-exclamation text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">User Not Found</h3>
                    <p class="text-gray-600 mb-6">We couldn't find your profile information. Please try logging in again.</p>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="px-6 py-3 bg-gradient-to-r from-blue-900 to-slate-900 text-white font-semibold rounded-xl hover:from-slate-900 hover:to-blue-900 transition-all duration-300 inline-block">
                        Logout & Try Again
                    </a>
                </div>
            </div>
        @endauth
    </div>
</main>
@endsection

@push('scripts')
<script>
    function validateAge(input) {
        const selectedDate = new Date(input.value);
        const today = new Date();
        let age = today.getFullYear() - selectedDate.getFullYear();
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

    function handlePasswordFormToggle() {
        const form = document.getElementById('passwordForm');
        
        if (form) {
            form.classList.toggle('hidden');
            
            // Smooth scroll to the form if it's being shown
            if (!form.classList.contains('hidden')) {
                form.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        }
    }
</script>
@endpush
