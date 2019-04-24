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
          $table->bigIncrements("user_id")->unsigned();
          $table->string("username")->unsigned();
          $table->string("first_name");
          $table->string("last_name");
          $table->string("email")->unsigned();
          $table->string("country");
          $table->string("city");
          $table->date("birthdate");
          $table->string("avatar");
          $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
          $table->foreign("username")->references("name")->on("users")->onDelete("cascade")->onUpdate("cascade");
          $table->foreign("email")->references("email")->on("users")->onDelete("cascade")->onUpdate("cascade");
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
      Schema::table("profile", function(Blueprint $table){
        $table->dropForeign(["user_id"]);
      });
      Schema::dropIfExists("profile");
    }
}
