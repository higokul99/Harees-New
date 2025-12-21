@extends('layouts.app')

@push('styles')
<style>
    /* Custom styles for checkboxes and specific elements if not using Tailwind utilities completely */
    .checkbox-label {
        transition: all 0.2s ease;
        border-radius: 8px;
    }
    .checkbox-label:hover {
        background: rgba(255, 255, 255, 0.2);
    }
    .checkbox-label input:checked ~ span {
        color: #1e3a8a; /* Blue-900 */
        font-weight: 600;
    }
    .checkmark {
        display: inline-block;
        width: 18px;
        height: 18px;
        border: 2px solid #1e3a8a;
        background-color: white;
        border-radius: 4px;
        transition: all 0.2s ease;
        position: relative;
    }
    .checkmark::after {
        content: '';
        position: absolute;
        display: none;
        left: 5px;
        top: 2px;
        width: 4px;
        height: 8px;
        border: solid #1e3a8a;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }
    .checkbox-label input:checked ~ .checkmark::after {
        display: block;
    }

    /* Order Card Styles */
    .order-card {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
        background: white;
    }
    .order-card:hover {
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        transform: translateY(-3px);
        border-color: #c7d2fe;
    }
    .order-card-header {
        background: linear-gradient(90deg, #f8fafc, #f1f5f9);
        padding: 12px 16px;
        border-bottom: 1px solid #e2e8f0;
    }
    /* Status Badges */
    .status-badge {
        display: inline-flex;
        align-items: center;
        font-size: 12px;
        font-weight: 600;
        padding: 4px 12px;
        border-radius: 20px;
        letter-spacing: 0.5px;
    }
    .status-delivered { background-color: #dcfce7; color: #166534; }
    .status-shipped { background-color: #dbeafe; color: #1d4ed8; }
    .status-processing { background-color: #fef3c7; color: #92400e; }
    .status-cancelled { background-color: #fee2e2; color: #991b1b; } /* Added missing style */

    /* Empty State */
    .empty-state {
        animation: fadeIn 0.5s ease;
        background: white;
        border-radius: 16px;
        padding: 60px 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        max-width: 600px;
        margin: 0 auto;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endpush


@section('content')
<div class="min-h-screen pt-14 pb-0 bg-gray-50">
    <div class="flex">
        <!-- Desktop Sidebar -->
        <div class="filter-sidebar w-full lg:w-[250px] p-4 bg-gradient-to-br from-amber-400 to-amber-500 border-r border-gray-200 hidden lg:block sticky top-[80px] h-[calc(100vh-80px)] overflow-y-auto">
            <!-- <div class="p-6"> removed inner padding wrapper to match product page structure -->
                <h2 class="text-lg font-bold mb-4 text-blue-900">ORDER FILTERS</h2>
                
                <!-- Order Status Filter -->
                <div class="mb-8">
                    <h3 class="text-sm font-semibold text-slate-600 mb-3 uppercase tracking-wider">Order Status</h3>
                    <div class="space-y-2">
                        <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                            <input type="checkbox" name="status_filter" value="pending" class="sr-only filter-checkbox">
                            <span class="checkmark mr-3"></span>
                            <span class="text-sm text-slate-700">Processing</span>
                        </label>
                        <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                            <input type="checkbox" name="status_filter" value="shipped" class="sr-only filter-checkbox">
                            <span class="checkmark mr-3"></span>
                            <span class="text-sm text-slate-700">On the way</span>
                        </label>
                        <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                            <input type="checkbox" name="status_filter" value="delivered" class="sr-only filter-checkbox">
                            <span class="checkmark mr-3"></span>
                            <span class="text-sm text-slate-700">Delivered</span>
                        </label>
                    </div>
                </div>
                
                <!-- Order Time Filter -->
                <div class="mb-8">
                    <h3 class="text-sm font-semibold text-slate-600 mb-3 uppercase tracking-wider">Order Time</h3>
                    <div class="space-y-2">
                         <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                            <input type="checkbox" name="time_filter" value="30days" class="sr-only filter-checkbox">
                            <span class="checkmark mr-3"></span>
                            <span class="text-sm text-slate-700">Last 30 days</span>
                        </label>
                        @php
                            $currentYear = date('Y');
                            $lastYear = $currentYear - 1;
                        @endphp
                        <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                            <input type="checkbox" name="time_filter" value="{{ $currentYear }}" class="sr-only filter-checkbox">
                            <span class="checkmark mr-3"></span>
                            <span class="text-sm text-slate-700">{{ $currentYear }}</span>
                        </label>
                        <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                            <input type="checkbox" name="time_filter" value="{{ $lastYear }}" class="sr-only filter-checkbox">
                            <span class="checkmark mr-3"></span>
                            <span class="text-sm text-slate-700">{{ $lastYear }}</span>
                        </label>
                        <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                            <input type="checkbox" name="time_filter" value="all" class="sr-only filter-checkbox">
                            <span class="checkmark mr-3"></span>
                            <span class="text-sm text-slate-700">All</span>
                        </label>
                    </div>
                </div>

        </div>
        
        <!-- Main Content -->
        <div class="flex-1 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <div class="flex justify-between items-start">
                    <div>
                        <!-- <br><br> -->
                        <h1 class="text-3xl font-bold text-dark mb-2">My Orders</h1>
                        <p class="text-slate-500">Track and manage your purchases</p>
                    </div>
                    <!-- <div class="flex items-center">
                        <span class="text-sm text-slate-500 mr-2 hidden sm:inline">Filtered by:</span>
                        <div class="flex flex-wrap gap-1" id="activeFilters"></div>
                    </div> -->
                </div>
            </div>
            
            @if($orders->isEmpty())
                <!-- Empty Orders State -->
                <div class="empty-state">
                    <div class="flex justify-center">
                        <div class="w-32 h-32 bg-indigo-50 rounded-full flex items-center justify-center mb-6">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold text-center text-dark mb-3">Your Order History is Empty</h2>
                    <p class="text-center text-slate-500 max-w-md mx-auto mb-8">Looks like you haven't placed any orders yet. Start shopping to fill your order history!</p>
                    <div class="text-center">
                        <a href="{{ route('home') }}" class="inline-block bg-gradient-to-r from-indigo-600 to-indigo-500 hover:from-indigo-700 hover:to-indigo-600 text-white px-8 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            Start Shopping
                        </a>
                    </div>
                </div>
            @else
                <!-- Orders List -->
                <div id="ordersGrid" class="space-y-5">
                    @foreach($orders as $order)
                        @foreach($order->items as $item)
                        @php
                            $status = $order->status;
                            $statusClass = 'status-processing';
                            $statusText = 'Processing';
                            $statusColor = 'text-amber-600';
                            $progressPercent = 10;
                            $progressColor = 'bg-yellow-500';

                            if ($status == 'shipped') {
                                $statusClass = 'status-shipped';
                                $statusText = 'Shipped';
                                $statusColor = 'text-orange-600';
                                $progressPercent = 50;
                                $progressColor = 'bg-orange-500';
                            } elseif ($status == 'delivered') {
                                $statusClass = 'status-delivered';
                                $statusText = 'Delivered';
                                $statusColor = 'text-green-600';
                                $progressPercent = 100;
                                $progressColor = 'bg-green-500';
                            } elseif ($status == 'cancelled') {
                                $statusClass = 'status-cancelled'; // Need style
                                $statusText = 'Cancelled';
                                $statusColor = 'text-red-600';
                            }

                            $imageUrl = asset('ims/internal/' . $item->product_image);
                        @endphp

                        <div class="order-card" data-status="{{ strtolower($order->status) }}" data-year="{{ $order->created_at->format('Y') }}" data-date="{{ $order->created_at->format('Y-m-d') }}">
                            <div class="order-card-header flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                     <span class="text-sm font-medium text-slate-600">Order #{{ $order->id }}</span>
                                     <span class="text-xs text-slate-400">|</span>
                                    <span class="text-xs text-slate-500">
                                        {{ $order->created_at->format('M d, Y') }}
                                    </span>
                                </div>
                                <span class="{{ $statusClass }} status-badge">
                                    {{ $statusText }}
                                </span>
                            </div>
                            
                            <div class="p-5">
                                <div class="flex items-start gap-5">
                                    <!-- Product Image -->
                                    <div class="flex-shrink-0 relative">
                                        <div class="product-image w-24 h-24 overflow-hidden bg-gray-100">
                                            <img src="{{ $imageUrl }}" 
                                                alt="{{ $item->product_name }}" 
                                                class="w-full h-full object-contain"
                                                onerror="this.onerror=null; this.src='{{ asset('assets/harees-jewellery-logo.png') }}'">
                                        </div>
                                    </div>
                                    
                                    <!-- Product Details -->
                                    <div class="flex-1 min-w-0">
                                        <div class="flex justify-between items-start mb-2">
                                            <div>
                                                <h3 class="font-semibold text-dark mb-1">
                                                    {{ $item->product_name }}
                                                </h3>
                                                <p class="text-sm text-slate-500">
                                                    Qty: {{ $item->quantity }}
                                                    @if($item->color) • {{ $item->color }} @endif
                                                    @if($item->size) • {{ $item->size }} @endif
                                                </p>
                                            </div>
                                            <span class="text-lg font-bold price-tag ml-4 whitespace-nowrap">
                                                ₹{{ number_format($item->price) }}
                                            </span>
                                        </div>
                                        
                                        <!-- Progress Bar -->
                                        <div class="mb-4">
                                            <div class="relative pt-1">
                                                <div class="flex mb-2 items-center justify-between">
                                                    <div class="text-right">
                                                        <span class="text-xs font-semibold inline-block {{ $statusColor }}">
                                                            {{ $statusText }}
                                                        </span>
                                                    </div>
                                                </div>
                                                
                                                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-slate-100">
                                                    <div style="width:{{ $progressPercent }}%" 
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center {{ $progressColor }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="flex items-center justify-between pt-2 border-t border-slate-100">
                                            <!-- Order Meta -->
                                            <div class="flex space-x-4">
                                                <!-- Additional meta can go here -->
                                            </div>
                                            
                                            <!-- Action Buttons -->
                                            <div class="flex space-x-3">
                                                 <!-- Placeholder buttons -->
                                                <button class="text-indigo-600 hover:text-indigo-800 font-medium text-sm flex items-center gap-1 transition-colors group">
                                                Track Order
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
    const orderCards = document.querySelectorAll('.order-card');

    function filterOrders() {
        const selectedStatuses = Array.from(document.querySelectorAll('input[name="status_filter"]:checked')).map(cb => cb.value);
        const selectedTimes = Array.from(document.querySelectorAll('input[name="time_filter"]:checked')).map(cb => cb.value);

        let visibleCount = 0;

        orderCards.forEach(card => {
            let status = card.getAttribute('data-status');
            const year = card.getAttribute('data-year');
            const dateStr = card.getAttribute('data-date');
            
            // Normalize status: database 'pending' -> display 'Processing'
            // If card status is 'processing', and filter is 'pending', let's match them? 
            // Or just rely on what we put in data-status.
            // The data-status is strtolower($order->status).
            // If DB has 'pending', data-status is 'pending', filter value is 'pending'. Match.
            // If DB has 'shipped', data-status is 'shipped', filter value is 'shipped'. Match.
            
            let statusMatch = (selectedStatuses.length === 0) || selectedStatuses.includes(status);
            
            let timeMatch = true;
            if (selectedTimes.length > 0) {
                // If 'all' is selected, show everything regardless of other time selections
                if (selectedTimes.includes('all')) {
                    timeMatch = true;
                } else {
                    timeMatch = false;
                    
                    // Check if Year exactly matches any selected year
                    if (selectedTimes.some(t => t === year)) {
                        timeMatch = true;
                    }
                    
                    // Check 30 Days special case
                    if (selectedTimes.includes('30days')) {
                        const orderDate = new Date(dateStr);
                        const thirtyDaysAgo = new Date();
                        thirtyDaysAgo.setDate(thirtyDaysAgo.getDate() - 30);
                        // Reset time part for accurate date comparison
                        orderDate.setHours(0,0,0,0);
                        thirtyDaysAgo.setHours(0,0,0,0);
                        
                        if (orderDate >= thirtyDaysAgo) {
                            timeMatch = true;
                        }
                    }
                }
            }

            if (statusMatch && timeMatch) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });
    }

    filterCheckboxes.forEach(cb => {
        cb.addEventListener('change', filterOrders);
    });
});
</script>
@endpush
