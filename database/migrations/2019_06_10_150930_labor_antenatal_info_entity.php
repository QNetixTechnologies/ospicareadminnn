<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaborAntenatalInfoEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create("labor_antenatal_info_table", function(Blueprint $table){
            $table->engine = "InnoDB";

            $table->increments("id");
            $table->string("last_menstrual_period",30)->nullable();
            $table->string("gestational_age",50)->nullable();
            $table->string("gravidity",20)->nullable();
            $table->string("parity",10)->nullable();
            $table->string("alive",10)->nullable();

            $table->unsignedInteger("patient_id");
            $table->foreign("patient_id")->references('id')->on('patient_table')->onDelete('cascade');


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
        Schema::drop("labor_antenatal_info_table");
    }
}
