<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigOption extends Model
{
    use HasFactory;
    protected $guarded = [];

    public const EXTERNAL = 'external';
    public const INTERNAL = 'internal';
    public const TYPES = [
        self::EXTERNAL,
        self::INTERNAL,
    ];
}
