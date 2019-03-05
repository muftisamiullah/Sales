<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
    
    
    $table->string( 'code' )->nullable( );
    $table->integer( 'discountAmount' )->nullable();
    $table->string('amountType')->nullable();
    $table->integer('status')->nullable();
    $table->timestamp( 'expiryDate' )->nullable();
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
        Schema::dropIfExists('vouchers');
    }
}
