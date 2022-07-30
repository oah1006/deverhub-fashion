<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'customer_id',
        'status',
        'total',
        'sub_total',
        'shipping_fee',
        'payment_method',
        'first_name',
        'last_name',
        'email',
        'gender',
        'address',
        'phone_number',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function product() {
        
    }
}
