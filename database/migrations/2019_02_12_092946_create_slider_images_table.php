<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_images', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('slidersTitle',64)->nullable();
            $table->string('slidersUrl',250)->nullable();
            $table->string('slidersImage',250);
            $table->string('slidersGroup',250)->nullable();
            $table->string('slidersHtmlText',250)->nullable();
            $table->dateTime('expiresDate')->nullable();
            $table->dateTime('dateAdded')->nullable();
            $table->UnsignedInteger('status');
            $table->string('type',250)->nullable();
            $table->dateTime('dateStatusChange')->nullable();
            $table->UnsignedInteger('languagesId');
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
        Schema::dropIfExists('slider_images');
    }
}
