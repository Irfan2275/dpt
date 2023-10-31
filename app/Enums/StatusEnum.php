<?php

namespace App\Enums;

enum StatusEnum:string {
    case PENDING = 'pending';
    case BUKAN_PENDUKUNG = '0';
    case PENDUKUNG = '1';

    
    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
        // ["deposit" => "Deposit", "withdraw" => "Withdraw"]
    }
}
