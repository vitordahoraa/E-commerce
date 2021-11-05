<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    use HasFactory;

    protected $table ='product_status';

    
     /**
     *
     * Relação do modelo de status do produto com as outras tabelas
     */
    public function products(){
        return $this->hasMany(Product::class,'status_id');
    }
}
