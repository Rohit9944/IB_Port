<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rfq extends Model
{
    protected $fillable = [
        'company_id',
        'created_by',
        'cargo_type',
        'cargo_description',
        'quantity',
        'unit',
        'loading_port',
        'discharge_port',
        'laycan_start',
        'laycan_end',
        'special_terms',
        'status'
    ];

    // 🔗 RFQ belongs to Company (Cargo Owner)
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // 🔗 RFQ created by User
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // 🔗 RFQ has many Quotes
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}