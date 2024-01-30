<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Interaction extends Model
{
    use HasFactory, HasUuids;

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function note(): BelongsTo
    {
        return $this->belongsTo(Note::class);
    }
}
