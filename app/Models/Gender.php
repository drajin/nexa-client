<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Gender extends Model
{
    use HasFactory, HasUuids;

    public function customer(): HasOne
    {
        return $this->hasOne(Customer::class);
    }
}
