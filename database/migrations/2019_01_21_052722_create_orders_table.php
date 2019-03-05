<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->UnsignedInteger('orderUserId');
            $table->foreign('orderUserId')->references('id')->on('users');
            $table->FLOAT('orderAmount');
            $table->FLOAT('orderTotalAmount');
            $table->string('orderShipName',100);
            $table->string('orderDeliverName',100);
            $table->string('orderShipAddress',100);
            $table->string('orderShipAddress2',100);
            $table->string('orderCity',50);
            $table->string('orderState',50);
            $table->string('orderZip',20);
            $table->string('orderCountry',50);
            $table->string('orderPhone',20);
            $table->string('orderFax',20);
            $table->FLOAT('orderShipping');
            $table->FLOAT('orderTax');
            $table->string('orderEmail',100);
            $table->string('orderType',100);
            $table->string('orderPaymentStatus',100);
            $table->timestamp('orderDate')->nullable();
            $table->tinyinteger('orderShipped');
            $table->string('orderTrackingNumber',80);
            $table->tinyinteger('orderStatus');
            $table->string('currency')->nullable();
            $table->UnsignedInteger('orderProductId');
            $table->UnsignedInteger('orderQuantity')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}