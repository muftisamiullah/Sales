<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturerImage',100)->nullable();
            $table->string('manufacturerName',100);
            $table->UnsignedInteger('manufacturerCategoryId');
            $table->foreign('manufacturerCategoryId')->references('id')->on('sub_categories');
            $table->string('manufacturerUrl',100)->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manufacturers');
    }
}
