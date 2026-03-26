<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'rfq_id',
        'quote_id',
        'cargo_owner_id',
        'ship_owner_id',
        'contract_value',
        'currency',
        'status',
        'signed_at'
    ];

    // 🔗 Contract belongs to RFQ
    public function rfq()
    {
        return $this->belongsTo(Rfq::class);
    }

    // 🔗 Contract belongs to Quote
    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }

    // 🔗 Cargo Owner (Company)
    public function cargoOwner()
    {
        return $this->belongsTo(Company::class, 'cargo_owner_id');
    }

    // 🔗 Ship Owner (Company)
    public function shipOwner()
    {
        return $this->belongsTo(Company::class, 'ship_owner_id');
    }
}