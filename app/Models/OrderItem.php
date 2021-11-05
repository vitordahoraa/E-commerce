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
    protected $table = 'orderitem';
    
     /**
     *
     * Relação do modelo de item do pedido com as outras tabelas
     */
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
