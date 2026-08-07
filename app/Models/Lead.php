<?php

namespace App\Models;

use App\Enums\LeadStatus;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'source',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => LeadStatus::class,
        ];
    }
}
