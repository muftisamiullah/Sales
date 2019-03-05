<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reviewContent',500);
            $table->UnsignedInteger('reviewUserId');
            $table->foreign('reviewUserId')->references('id')->on('users');
            $table->UnsignedInteger('reviewProductId');
            $table->foreign('reviewProductId')->references('id')->on('products');
            $table->float('rating',2,1);
            $table->boolean('status')->default(0);
            $table->timestamp('reviewDate');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
