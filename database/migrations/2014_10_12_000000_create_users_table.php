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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique()->charset('utf8');
            $table->string('password');
            $table->string('matric_id')->unique();  // Added matric_id column
            $table->string('role')->default('user'); // Added role column with default value
            $table->string('status')->default('active'); // Added status column with default value
            $table->string('phone')->nullable(); // Added phone column, made nullable
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
