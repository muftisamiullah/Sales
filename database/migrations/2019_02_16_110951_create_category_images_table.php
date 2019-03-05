<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_images', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('catImageTitle',64)->nullable();
            $table->string('catImageUrl',250)->nullable();
            $table->string('catImage',250);
            $table->string('catImageGroup',250)->nullable();
            $table->string('catImageHtmlText',250)->nullable();
            $table->dateTime('expiresDate')->nullable();
            $table->dateTime('dateAdded')->nullable();
            $table->UnsignedInteger('status');
            $table->foreign('status')->references('id')->on('categories');
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
        Schema::dropIfExists('category_images');
    }
}
