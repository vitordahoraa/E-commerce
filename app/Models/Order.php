<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'user_id'
    ];

    public function orderitens(){
        return $this->hasMany(OrderItem::class,'order_id');
    }

    public function user(){
        return $this->belongsto(User::class,'user_id');
    }
}
