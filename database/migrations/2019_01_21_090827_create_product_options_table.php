<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
 {
     Schema::create('productoptions', function (Blueprint $table) {
         $table->increments('id',10);
         $table->UnsignedInteger('optionId');
         $table->foreign('optionId')->references('id')->on('options');
         $table->UnsignedInteger('productId');
         $table->foreign('productId')->references('id')->on('products');
         $table->integer('optionGroupId');
         $table->double('optionPriceIncrement');
     });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productoptions');
    }
}
