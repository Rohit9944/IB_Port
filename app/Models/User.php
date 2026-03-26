<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'company_id',
        'first_name',
        'last_name',
        'name',
        'email',
        'password',
        'role',
        'is_prevetting_complete' // ✅ add this
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_prevetting_complete' => 'boolean',
        'prevetting_company_details' => 'array',
        'prevetting_documents' => 'array',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function vessels()
    {
        return $this->hasMany(Vessel::class);
    }
}
