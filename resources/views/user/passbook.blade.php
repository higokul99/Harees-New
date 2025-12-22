<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Scheme Passbook - {{ $scheme->scheme_type }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @page {
            size: A4;
            margin: 15mm;
        }
        body {
            font-family: Arial, sans-serif;
            background: #caa173;
        }
        .passbook-container {
            width: 100%;
            max-width: 210mm;
            min-height: 297mm;
            margin: 0 auto;
            padding: 15mm;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        @media print {
            body {
                background: white;
            }
            .passbook-container {
                box-shadow: none;
                padding: 0;
                margin: 0;
                width: 100%;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="passbook-container">
        <!-- Print Button -->
        <div class="no-print mb-4 flex justify-end gap-2">
            <button onclick="window.print()" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                <i class="fas fa-print"></i> Print Passbook
            </button>
            <a href="{{ route('schemes.history') }}" class="bg-gray-600 text-white px-6 py-2 rounded hover:bg-gray-700">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>

        <!-- Header -->
        <div class="text-center mb-6 pb-4 border-b-2 border-amber-700">
            <h1 class="text-3xl font-bold text-gray-800">GOLD FUND PASSBOOK</h1>
        </div>

        <!-- User Details -->
        <div class="mb-6 bg-gray-50 p-4 rounded border border-gray-300">
            <div class="grid grid-cols-2 gap-4">
                <div class="border-b border-gray-300 pb-2">
                    <p class="text-xs font-medium text-gray-500">SCHEME No</p>
                    <p class="font-medium text-gray-900">{{ $scheme->code }}</p>
                </div>
                <div class="border-b border-gray-300 pb-2">
                    <p class="text-xs font-medium text-gray-500">A/c No</p>
                    <p class="font-medium text-gray-900">HGS{{ str_pad($user->id, 5, '0', STR_PAD_LEFT) }}</p>
                </div>
                <div class="border-b border-gray-300 pb-2">
                    <p class="text-xs font-medium text-gray-500">Name</p>
                    <p class="font-medium text-gray-900">{{ $user->name }}</p>
                </div>
                <div class="border-b border-gray-300 pb-2">
                    <p class="text-xs font-medium text-gray-500">Phone No</p>
                    <p class="font-medium text-gray-900">{{ $user->phone ?? 'N/A' }}</p>
                </div>
            </div>
        </div>

        <!-- Scheme Summary -->
        <div class="mb-6 border border-gray-300 rounded overflow-hidden">
            <table class="w-full">
                <thead class="bg-amber-700 text-white">
                    <tr>
                        <th class="p-2 text-left text-sm">Scheme Type</th>
                        <th class="p-2 text-left text-sm">Monthly Amount</th>
                        <th class="p-2 text-left text-sm">Duration</th>
                        <th class="p-2 text-left text-sm">Total Amount</th>
                        <th class="p-2 text-left text-sm">Bonus</th>
                        <th class="p-2 text-left text-sm">Maturity Value</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="p-2 border-t">{{ $scheme->scheme_name }}</td>
                        <td class="p-2 border-t">₹{{ number_format($scheme->monthly_amount, 2) }}</td>
                        <td class="p-2 border-t">11 Months</td>
                        <td class="p-2 border-t">₹{{ number_format($scheme->monthly_amount * 11, 2) }}</td>
                        <td class="p-2 border-t">₹{{ number_format($scheme->bonus_amount, 2) }}</td>
                        <td class="p-2 border-t">₹{{ number_format(($scheme->monthly_amount * 11) + $scheme->bonus_amount, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Payment History -->
        <table class="w-full border-collapse border border-gray-300 mb-6">
            <thead class="bg-amber-700 text-white">
                <tr>
                    <th class="border border-gray-300 p-2 text-sm">#</th>
                    <th class="border border-gray-300 p-2 text-sm">Payment Date</th>
                    <th class="border border-gray-300 p-2 text-sm">Receipt No</th>
                    <th class="border border-gray-300 p-2 text-sm">Amount</th>
                    <th class="border border-gray-300 p-2 text-sm">Cumulative Amount</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @php
                    $counter = 1;
                    $cumulative = 0;
                @endphp
                @foreach($payments as $payment)
                    @php $cumulative += $payment->amount; @endphp
                    <tr class="{{ $counter % 5 == 0 ? 'bg-yellow-50' : '' }}">
                        <td class="border border-gray-300 p-2 text-center">{{ $counter }}</td>
                        <td class="border border-gray-300 p-2">{{ \Carbon\Carbon::parse($payment->payment_date)->format('d/m/Y') }}</td>
                        <td class="border border-gray-300 p-2">{{ $payment->receipt_no }}</td>
                        <td class="border border-gray-300 p-2">₹{{ number_format($payment->amount, 2) }}</td>
                        <td class="border border-gray-300 p-2">₹{{ number_format($cumulative, 2) }}</td>
                    </tr>
                    @php $counter++; @endphp
                @endforeach

                {{-- Fill remaining empty rows --}}
                @for ($i = $counter; $i <= 11; $i++)
                    <tr class="{{ $i % 5 == 0 ? 'bg-yellow-50' : '' }}">
                        <td class="border border-gray-300 p-2 text-center">{{ $i }}</td>
                        <td class="border border-gray-300 p-2"></td>
                        <td class="border border-gray-300 p-2"></td>
                        <td class="border border-gray-300 p-2"></td>
                        <td class="border border-gray-300 p-2"></td>
                    </tr>
                @endfor
            </tbody>
        </table>

        <!-- Footer -->
        <div class="mt-8 pt-4 border-t border-amber-700 text-center text-sm text-gray-600">
            <p>This is an official document. Please keep it safe.</p>
            <p>Generated on {{ now()->format('d/m/Y H:i:s') }}</p>
        </div>
    </div>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</body>
</html>
