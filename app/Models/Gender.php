<?php

namespace App\Models;

use App\Casts\Lowercase;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    use HasFactory, HasUuids;

    protected $casts = [
        'type' => Lowercase::class,
    ];

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
}
