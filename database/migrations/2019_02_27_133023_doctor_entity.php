<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DoctorEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("doctor_table", function(Blueprint $table){
            $table->engine = "InnoDB";

            $table->increments("id");
            $table->string("names",50)->nullable();
            $table->string("email",50)->nullable();
            $table->string("sex",10)->nullable();
            $table->string("phone_number",20)->nullable();
            $table->string("address_street",100)->nullable();
            $table->string("address_lga",50)->nullable();
            $table->string("address_state",50)->nullable();
            $table->string("password",100)->nullable();
            $table->string("status",10)->nullable();
            $table->string("token",50)->nullable();
            $table->string("specialty",100)->nullable();
            $table->string("level",100)->nullable();
            $table->string("availability",20)->nullable();
            $table->string("online_consultation_fee",20)->nullable();
            $table->string("onsite_consultation_fee",20)->nullable();
            $table->text("profile")->nullable();
            $table->string("image_path",200)->nullable();
            $table->string("code",50)->nullable();
            $table->string("is_independent",10)->nullable();
            $table->string("registering_body",50)->nullable();
            $table->string("registration_number",50)->nullable();
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
        Schema::drop("doctor_table");
    }
}
