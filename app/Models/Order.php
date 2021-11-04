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

    public function order_itens(){
        return $this->hasMany(Order::class);
    }

    public function user(){
        return $this->belongsto(User::class,'user_id');
    }
}
