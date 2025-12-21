<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fullname',
        'name',
        'email',
        'phone',
        'password',
        'security_question',
        'security_answer',
        'address1',
        'address2',
        'city',
        'state',
        'pincode',
        'landmark',
        'dob',
        'anniversary',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'security_answer',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'dob' => 'date',
            'anniversary' => 'date',
        ];
    }

    /**
     * Disable automatic password hashing (using plain text as per old system)
     * WARNING: This is not secure! Consider implementing proper hashing in production.
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = $value;
    }
}
