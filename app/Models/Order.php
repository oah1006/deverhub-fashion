<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function items() {
        return $this->hasMany(OrderItems::class, 'order_id');
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            do {
                $code = 'DVH-' . strtoupper(Str::random(10));
            } while (static::where('code', $code)->exists());
            $model->code = $code;
        });
    }

    public function calculateBill() {
        $this->sub_total = $this->items->sum(function($items) {
            return $items['unit_price'] * $items['qty'];
        });

        $fees = collect([
            $this->sub_total,
            $this->shipping_fee
        ]);

        $this->total = $fees->sum();
    } 



    
}
