<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;
    protected $fillable = [
        'merchant_name',
        'admin_id'
    ];

    protected $guarded = [];

    public function user(){
        return $this->hasOne(User::class,'id','admin_id');
    }
    public function products(){
        return $this->hasMany(Product::class,'merchant_id');
    }
}

