<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id',12);
            $table->UnsignedInteger('addressId');
            $table->foreign('addressId')->references('id')->on('users');
            $table->UnsignedInteger('zip')->nullable();
            $table->string('address',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('state',100)->nullable();
            $table->string('country',100)->nullable();
            $table->string('name',100)->nullable();
            $table->string('phone',20);
            $table->UnsignedInteger('selectAddress');
            $table->string('landMark',20)->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
