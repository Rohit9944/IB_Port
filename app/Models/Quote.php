<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'rfq_id',
        'company_id',
        'vessel_id',
        'price',
        'currency',
        'freight_rate',
        'terms',
        'valid_till',
        'status'
    ];

    // 🔗 Quote belongs to RFQ
    public function rfq()
    {
        return $this->belongsTo(Rfq::class);
    }

    // 🔗 Quote belongs to Company (Ship Owner / Broker)
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // 🔗 Quote belongs to Vessel
    public function vessel()
    {
        return $this->belongsTo(Vessel::class);
    }

    // 🔗 One Quote → One Contract
    public function contract()
    {
        return $this->hasOne(Contract::class);
    }
}