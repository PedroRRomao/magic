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
        Schema::create("profiles", function (Blueprint $table) {
          $table->bigIncrements("id");
          $table->unsignedInteger("user_id")->nullable();
          $table->string("username");
          $table->string("first_name");
          $table->string("last_name");
          $table->string("email")->nullable();
          $table->string("country");
          $table->string("city");
          $table->date("birthdate");
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists("profile");
    }
}
