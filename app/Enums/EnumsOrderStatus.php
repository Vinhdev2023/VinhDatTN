<?php

namespace App\Enums;

enum EnumsOrderStatus:string
{
    case CANCELED = 'CANCELED';
    case PENDING = 'PENDING';
    case CONFIRMED = 'CONFIRMED';
    case COMPLETED = 'COMPLETED';
}
