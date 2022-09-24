<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [

    'main_order_id',
    'product_quantity',
    'order_status',
    'order_total_price',
    'user_id',
    'product_id',
];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
    public function mainOrder()
    {
        return $this->belongsTo(MainOrder::class,'main_order_id');
    }
    use HasFactory;
}
