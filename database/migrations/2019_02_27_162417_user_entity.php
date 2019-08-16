<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("user_table", function(Blueprint $table){
            $table->engine = "InnoDB";

            $table->increments("id");
            $table->string("names",50)->nullable();
            $table->string("email",50)->nullable();
            $table->string("phone_number",20)->nullable();
            $table->string("password",100)->nullable();
            $table->string("status",10)->nullable();
            $table->string("token",50)->nullable();
            $table->string("image_path",200)->nullable();
            $table->string("code",50)->nullable();
            $table->text("firebase_android")->nullable();
            $table->text("firebase_ios")->nullable();


            $table->unsignedInteger("hospital_id");
            $table->foreign("hospital_id")->references('id')->on('hospital_table')->onDelete('cascade');


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
        Schema::drop("user_table");
    }
}
