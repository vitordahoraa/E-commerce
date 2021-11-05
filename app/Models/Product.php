<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product_name',
        'price',
        'image',
        'merchant_id',
        'status',
    ];

    public function status(){
        return $this->hasOne(ProductStatus::class);
    }
    public function merchant(){
        return $this->belongsTo(Merchant::class,'merchant_id','id');
    }
    
    public function orderitens(){
        return $this->hasMany(OrderItem::class);
    }
    
}
