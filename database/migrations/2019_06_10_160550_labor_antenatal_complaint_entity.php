<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaborAntenatalComplaintEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("labor_complaint_table", function(Blueprint $table){
            $table->engine = "InnoDB";

            $table->increments("id");

            $table->text("complaint")->nullable();

            $table->text("impression")->nullable();

            $table->text("action_taken")->nullable();

            $table->unsignedInteger("request_review")->default(0);

            $table->string("doctor_to_review", 10)->nullable();

            $table->unsignedInteger("urgency_status")->default(0);

            $table->unsignedInteger("review_status")->default(0);



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
        Schema::drop("labor_complaint_table");
    }
}
