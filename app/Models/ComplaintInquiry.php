<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ComplaintInquiry extends Model
{
    use HasFactory, HasUuids;

    protected $casts = [
        'creation_timestamp' => 'timestamp',
        'resolution_timestamp' => 'timestamp',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function note(): BelongsTo
    {
        return $this->belongsTo(Note::class);
    }
}
