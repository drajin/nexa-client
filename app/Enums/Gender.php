<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum Gender
{
    use EnumHelper;

    case MALE;
    case FEMALE;
    case DIVERSE;
}
