<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
  {
      Schema::create('products', function (Blueprint $table) {
          $table->increments('id',12);
          $table->string('productSku',50)->nullable();
          $table->string('productName',150);
          $table->float('productPrice')->nullable();
          $table->float('productWeight')->nullable();
          $table->string('productCartDesc',500)->nullable();
          $table->string('productAddInfo',1000)->nullable();
          $table->text('productTechSpecs')->nullable();
          $table->text('productLongDesc')->nullable();
          $table->string('productThumb',100)->nullable();
          $table->string('productImage',100)->nullable();
          $table->string('productImageOne',100)->nullable();
          $table->string('productImageTwo',100)->nullable();
          $table->string('productImageThree',100)->nullable();
          $table->UnsignedInteger('productCategoryId');
          $table->foreign('productCategoryId')->references('id')->on('categories');
          $table->UnsignedInteger('productSubCategoryId');
          $table->foreign('productSubCategoryId')->references('id')->on('sub_categories');
          $table->UnsignedInteger('productManufacturerId');
          $table->foreign('productManufacturerId')->references('id')->on('manufacturers');
          $table->timestamp('productUpdateDate')->nullable();
          $table->float('productStock')->nullable();
          $table->tinyinteger('productLive')->nullable();
          $table->tinyinteger('productUnlimited')->nullable();
          $table->string('productLocation',250)->nullable();
          $table->UnsignedInteger('tags');
      });
  }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
