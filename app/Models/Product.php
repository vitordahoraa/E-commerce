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
    ];

    public function status(){
        return $this->hasOne(ProductStatus::class,'id');
    }
    public function merchant(){
        return $this->belongsTo(Merchant::class,'id','merchant_id');
    }
    
}
