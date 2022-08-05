<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'config'
    ];

    public static function get($key, $default = null) {
        return optional(static::where('key', $key)->first())->value ?? $default;
    }
}
