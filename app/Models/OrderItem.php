<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'quantity',
        'product_id',
        'order_id',
    ];
    protected $table = 'order_item';
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function product(){
        return $this->hasOne(Product::class);
    }
}
