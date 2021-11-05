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
        'status_id',
    ];

    protected $table  = 'products';

    
     /**
     *
     * Relação do modelo de produto com as outras tabelas
     */
    public function status(){
        return $this->belongsTo(ProductStatus::class,'status_id');
    }
    public function merchant(){
        return $this->belongsTo(Merchant::class,'merchant_id','id');
    }
    
    public function orderitens(){
        return $this->hasMany(OrderItem::class);
    }
    
}
