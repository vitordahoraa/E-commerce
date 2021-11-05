<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merchant_id')->constrained;
            $table->string('product_name');
            $table->string('image');
            $table->float('price');
            $table->unsignedBigInteger('status');
            
            $table->foreign('merchant_id')->references('id')->on('merchants');
            $table->foreign('status')->references('id')->on('product_status');
            $table->timestamps();
        });

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
