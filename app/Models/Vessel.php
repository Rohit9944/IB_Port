<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vessel extends Model
{
    protected $fillable = [
        'company_id',
        'vessel_name',
        'vessel_type',
        'imo_number',
        'capacity',
        'built_year',
        'flag',
        'status',
        'approved_by',
        'approved_at',
        'rejection_reason'
    ];

    protected $casts = [
        'capacity' => 'decimal:2',
        'built_year' => 'integer',
        'approved_at' => 'datetime',
    ];

    protected $attributes = [
        'status' => self::STATUS_PENDING
    ];

    // ✅ Accessors: Use with $vessel->name, $vessel->type
    public function getNameAttribute()
    {
        return $this->vessel_name;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['vessel_name'] = $value;
    }

    public function getTypeAttribute()
    {
        return $this->vessel_type;
    }

    public function setTypeAttribute($value)
    {
        $this->attributes['vessel_type'] = $value;
    }

    // Relationships
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    // Status Constants
    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';

    // Scopes
    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    public function scopeApproved($query)
    {
        return $query->where('status', self::STATUS_APPROVED);
    }

    public function scopeRejected($query)
    {
        return $query->where('status', self::STATUS_REJECTED);
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeForCompany($query, $companyId)
    {
        return $query->where('company_id', $companyId);
    }

    // Status badge for UI
    public function statusBadge()
    {
        return match ($this->status) {
            self::STATUS_PENDING => 'warning',
            self::STATUS_APPROVED => 'success',
            self::STATUS_REJECTED => 'danger',
            default => 'secondary'
        };
    }

    // Helpers
    public function canBeEdited()
    {
        return $this->status === self::STATUS_PENDING;
    }

    public function canBeApproved()
    {
        return $this->status === self::STATUS_PENDING;
    }

    public function isApproved()
    {
        return $this->status === self::STATUS_APPROVED;
    }

    public function isRejected()
    {
        return $this->status === self::STATUS_REJECTED;
    }
}

