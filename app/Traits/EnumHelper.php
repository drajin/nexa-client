<?php

namespace App\Traits;

use App\Enums\SortOrder;

trait EnumHelper
{
    public static function casesNames(?SortOrder $sortOrder = null): array
    {
        $casesStringify = array_column(array: self::cases(), column_key: 'name');

        match ($sortOrder) {
            SortOrder::ASC => array_multisort( array: $casesStringify, rest: [SORT_ASC]),
            SortOrder::DESC => array_multisort( array: $casesStringify, rest: [SORT_DESC]),
            default => '',

        };

        return $casesStringify;

    }
}
