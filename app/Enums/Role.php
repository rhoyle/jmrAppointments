<?php

namespace App\Enums;

enum Role: int
{
    case ADMIN = 1;
    case STAFF = 2;
    case CLIENT = 3;
}
