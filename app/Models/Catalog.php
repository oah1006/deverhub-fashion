<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function product() {
        return $this->hasMany(Product::class);
    }
}
