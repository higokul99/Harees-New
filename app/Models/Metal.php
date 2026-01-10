<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metal extends Model
{
    use HasFactory;

    protected $primaryKey = 'metal_id';
    public $timestamps = false;

    protected $fillable = ['name', 'code'];

    public function purities()
    {
        return $this->hasMany(MetalsPurity::class);
    }
}
