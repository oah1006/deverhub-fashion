<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'color',
        'unit_price',
        'size',
        'created_at', 
        'updated_at'
    ];


    public function product() {
        $this->belongsTo(Product::class);
    }
}
