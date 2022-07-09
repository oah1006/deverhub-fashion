<?php

namespace App\Models;

use App\Models\Catalog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'catalog_id',
    ];

    public function catalog() {
        return $this->belongsTo(Catalog::class, 'catalog_id');
    }

    public function productVariants() {
        return $this->hasMany(ProductVariants::class, 'product_id');
    }
}
