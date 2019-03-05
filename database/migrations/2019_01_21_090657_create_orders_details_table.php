<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
  {
      Schema::create('orderdetails', function (Blueprint $table) {
          $table->increments('id',11);
          $table->UnsignedInteger('detailOrderId');
          $table->foreign('detailOrderId')->references('id')->on('orders');
          $table->UnsignedInteger('detailProductId');
          $table->foreign('detailProductId')->references('id')->on('products');
          $table->string('detailName',11);
          $table->float('detailPrice');
          $table->string('detailSku',50);
          $table->integer('detailQuantity');
      });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
}
