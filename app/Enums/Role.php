<?php

namespace App\Enums;

enum Role: int
{
    case CLIENT = 1;
    case STAFF = 2;
    case ADMIN = 3;

}
