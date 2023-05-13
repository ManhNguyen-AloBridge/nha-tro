<?php

namespace App\Enums;

use App\Traits\BackedEnumTrait;

enum EnumGender: int
{
    use BackedEnumTrait;

    case MALE = 0;
    case FEMALE = 1;
    case OTHERS = 9;


    public static function getName(): string
    {
        return 'gender';
    }
}
