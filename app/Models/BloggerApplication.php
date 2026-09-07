<?php

namespace App\Models;

use App\Enums\BloggerApplicationStatus;
use Illuminate\Database\Eloquent\Model;

class BloggerApplication extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'profession',
        'status',
        'rejected_at',
    ];

    protected function casts(): array
    {
        return [
            'status' => BloggerApplicationStatus::class,
            'rejected_at' => 'datetime',
        ];
    }

    public function fullName(): string
    {
        return trim("{$this->first_name} {$this->last_name}");
    }
}
