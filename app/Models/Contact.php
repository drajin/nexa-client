<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory, HasUuids;

    protected $casts = [
        'deleted_at' => 'timestamp',
    ];

    public function contactable(): BelongsTo
    {
        return $this->belongsTo(Contactable::class);
    }
}
