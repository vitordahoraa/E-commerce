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

     /**
     *
     * Relação do modelo de fornecedor com as outras tabelas
     * 
     */
    public function user(){
        return $this->hasOne(User::class,'id');
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}
