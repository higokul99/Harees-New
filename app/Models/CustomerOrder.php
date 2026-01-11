<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'user_id',
        'merchant_order_id',
        'phonepe_order_id',
        'phonepe_transaction_id',
        'fullname',
        'email',
        'phone',
        'pincode',
        'address',
        'city',
        'state',
        'delivery_type',
        'total_amount',
        'discount_amount',
        'final_amount',
        'payment_method',
        'payment_status',
        'status'
    ];

    /**
     * Get the PhonePe order associated with this customer order.
     */
    public function phonePeOrder()
    {
        return $this->hasOne(PhonePeOrder::class, 'merchant_order_id', 'merchant_order_id');
    }

    /**
     * Check if this order is paid via PhonePe.
     */
    public function isPaidViaPhonePe(): bool
    {
        return $this->payment_method === 'phonepe' && $this->payment_status === 'completed';
    }
}
