<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
          $table->unsignedBigInteger('user_id');
          $table->string('username');
          $table->string('first_name');
          $table->string('last_name');
          $table->string('email');
          $table->string('country');
          $table->string('city');
          $table->string('avatar');
          $table->date('birthdate');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('username')->references('name')->on('users')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('email')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
