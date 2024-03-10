<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Gender implements HasLabel
{
    case MALE;
    case FEMALE;
    case DIVERSE;

    public function getLabel(): ?string
    {
        return match($this) {
            self::MALE => 'male',
            self::FEMALE => 'female',
            self::DIVERSE => 'diverse',
        };
    }
}
