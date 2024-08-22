<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('cod_produto');
            $table->string('nome_produto');
            $table->float('valor_produto');
            $table->unsignedBigInteger('marca_produto');
            $table->float('estoque');
            $table->unsignedBigInteger('cidade_id');
            $table->foreign('marca_produto')->references('cod_marca')->on('brands');
            $table->foreign('cidade_id')->references('cod_cidade')->on('cities');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

