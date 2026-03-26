<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'company_id',
        'plan',
        'amount',
        'start_date',
        'end_date',
        'status'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    protected $attributes = [
        'status' => 'active'
    ];

    // 🔗 Subscription belongs to Company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // 🔥 Constants
    const STATUS_ACTIVE = 'active';
    const STATUS_EXPIRED = 'expired';
    const STATUS_CANCELLED = 'cancelled';

    const PLAN_BASIC = 'basic';
    const PLAN_PRO = 'pro';
}