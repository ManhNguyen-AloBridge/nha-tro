<?php

namespace App\Enums;

use App\Traits\BackedEnumTrait;

enum EnumAdminRole: int
{
    use BackedEnumTrait;

    case SUPER_ADMIN = 1;
    case ADMIN = 2;
    case SUPERVISOR = 3;

    public static function getName(): string
    {
        return 'role';
    }
}
