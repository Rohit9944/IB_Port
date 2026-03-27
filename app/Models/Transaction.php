<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'company_id',
        'type',
        'amount',
        'currency',
        'status',
        'payment_ref'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
    ];

    protected $attributes = [
        'status' => 'pending',
        'currency' => 'USD'
    ];

    // 🔗 Transaction belongs to Company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // 🔥 Constants
    const STATUS_PENDING = 'pending';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';

    const TYPE_SUBSCRIPTION = 'subscription';
    const TYPE_COMMISSION = 'commission';
}