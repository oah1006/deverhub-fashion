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
        'sku',
        'description',
        'catalog_id',
        'stock',
        'unit_price'
    ];

    public function catalog() {
        return $this->belongsTo(Catalog::class, 'catalog_id');
    }
}
