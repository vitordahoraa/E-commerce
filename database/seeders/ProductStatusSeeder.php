<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ProductStatusSeeder extends Seeder
{
    /**
     * Cadastra os status dos produtos
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_status')->insert([
            'name'=>'Disponível',
            'description' => 'Produto com estoque para venda e com informações validadas',
        ]);

        DB::table('product_status')->insert([
            'name'=>'Indisponível',
            'description' => 'Produto sem estoque para venda e com informações validadas ou aguardando validação'
        ]);
    }
}
