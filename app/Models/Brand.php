<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function complaintInquiries(): HasMany
    {
        return $this->hasMany(ComplaintInquiry::class);
    }
}
