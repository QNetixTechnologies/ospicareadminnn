<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaborVaginalExaminationEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("vaginal_examination_table", function(Blueprint $table){
            $table->engine = "InnoDB";

            $table->increments("id");

            $table->text("remark")->nullable();


            $table->unsignedInteger("pelvic_assess_req")->default(0);

            $table->string("cervical_dilation", 20)->nullable();

            $table->string("impression", 20)->nullable();

            $table->string("plan", 100)->nullable();

            $table->text("complaint")->nullable();

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
        Schema::drop("vaginal_examination_table");
    }
}
