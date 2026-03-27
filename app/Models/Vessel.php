<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vessel extends Model
{
    protected $fillable = [
        'company_id',
        'name',
        'imo_number',
        'type',
        'capacity',
        'built_year',
        'flag',
        'status'
    ];

    protected $casts = [
        'capacity' => 'decimal:2',
        'built_year' => 'integer',
    ];

    protected $attributes = [
        'status' => 'available'
    ];

    // 🔗 Vessel belongs to Company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // 🔥 Constants
    const STATUS_AVAILABLE = 'available';
    const STATUS_BUSY = 'busy';
    const STATUS_MAINTENANCE = 'maintenance';
}