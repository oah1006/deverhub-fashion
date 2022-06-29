<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'parent_id',
    ];

    public function parent() {
        return $this->belongsTo(Catalog::class, 'parent_id');
    }
}
