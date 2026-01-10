<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakingCharge extends Model
{
    use HasFactory;

    protected $table = 'making_charges';
    public $timestamps = false;

    protected $fillable = [
        'metalpurity_id',
        'model_id',
        'model_name',
        'category_id',
        'normal_mc',
        'discount_mc',
        'excp_normal_mc',
        'excp_discount_mc'
    ];

    /**
     * Get the making charges for a specific combination.
     */
    public static function getCharges($metalId, $purityId, $categoryId)
    {
        return self::where('metalpurity_id', $purityId)
            ->where('category_id', $categoryId)
            ->first();
    }
}
