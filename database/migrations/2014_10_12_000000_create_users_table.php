<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('email')->unique();
            $table->string('password',500);
            $table->string('firstName',50); 
            $table->string('lastName',50)->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('city',90)->nullable();
            $table->string('state',20)->nullable();
            $table->string('zip',12)->nullable();
            $table->string('remember_token')->nullable();
            $table->tinyinteger('emailVerified')->nullable();
            $table->timestamp('registrationOnDate')->nullable();
            $table->timestamp('verificationOnDate')->nullable();
            $table->string('ip',50)->nullable();
            $table->string('phone',20);
            $table->longText('passwordHint')->nullable();
            $table->boolean('isAdmin')->nullable();
            $table->string('country',20)->nullable();
            $table->string('address',100)->nullable();
            $table->string('address2',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}