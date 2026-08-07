<?php

namespace App\Enums;

enum LeadStatus: string
{
    case New = 'new';
    case Contacted = 'contacted';
    case Qualified = 'qualified';
    case Converted = 'converted';
    case Lost = 'lost';

    public function label(): string
    {
        return match ($this) {
            self::New => 'New',
            self::Contacted => 'Contacted',
            self::Qualified => 'Qualified',
            self::Converted => 'Converted',
            self::Lost => 'Lost',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::New => 'info',
            self::Contacted => 'warning',
            self::Qualified => 'primary',
            self::Converted => 'success',
            self::Lost => 'danger',
        };
    }
}
