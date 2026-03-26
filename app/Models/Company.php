<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'type',
        'country',
        'address',
        'verification_status',
        'created_by'
    ];

    // 🔗 Company creator (admin user)
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // 🔗 All users of company
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // 🔗 Company vessels
    public function vessels()
    {
        return $this->hasMany(Vessel::class);
    }

    // 🔗 Company RFQs
    public function rfqs()
    {
        return $this->hasMany(Rfq::class);
    }

    // 🔗 Company subscriptions
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}