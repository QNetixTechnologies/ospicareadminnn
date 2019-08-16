<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("patient_table", function(Blueprint $table){
            $table->engine = "InnoDB";

            $table->increments("id");
            $table->string("patient_id",50)->nullable();
            $table->string("patient_hospital_id",100)->nullable();
            $table->string("names",50)->nullable();
            $table->string("phone_number",20)->nullable();
            $table->string("dob",20)->nullable();
            $table->string("age",10)->nullable();
            $table->string("sex",10)->nullable();
            $table->string("address",100)->nullable();
            $table->string("status",10)->nullable();
            $table->string("image_path",200)->nullable();;
            $table->string("assigned_doctor",10)->nullable();
            $table->string("is_patient_antenatal",10)->nullable();
            $table->unsignedInteger("monitoring_status")->default(0);

            $table->unsignedInteger("hospital_id");
            $table->foreign("hospital_id")->references('id')->on('hospital_table')->onDelete('cascade');

            $table->unsignedInteger("doctor_id");
            $table->foreign("doctor_id")->references('id')->on('doctor_table')->onDelete('cascade');

            $table->unsignedInteger("user_id");
            $table->foreign("user_id")->references('id')->on('user_table')->onDelete('cascade');

            $table->unsignedInteger("patient_type_id");
            $table->foreign("patient_type_id")->references('id')->on('patient_type_table')->onDelete('cascade');


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
        Schema::drop("patient_table");
    }
}
