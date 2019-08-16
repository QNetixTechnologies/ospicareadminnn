<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaborAntenatalBaselineAssessmentEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("baseline_assessment_table", function(Blueprint $table){
            $table->engine = "InnoDB";

            $table->increments("id");

            $table->string("blood_pressure", 15)->nullable();
            $table->string("heart_rate", 15)->nullable();
            $table->string("temperature", 15)->nullable();
            $table->string("symphysis_fundal_height", 15)->nullable();
            $table->string("fetal_heart_tone", 15)->nullable();
            $table->string("fetal_heart_rate", 15)->nullable();
            $table->string("lie", 50)->nullable();
            $table->string("presentation", 50)->nullable();
            $table->string("position", 50)->nullable();
            $table->string("descent", 50)->nullable();

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
        Schema::drop("baseline_assessment_table");
    }
}
