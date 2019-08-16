<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfomaEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create("general_health_profoma_table", function(Blueprint $table){
            $table->engine = "InnoDB";

            $table->increments("id");

            $table->text("complaint")->nullable();
            $table->text("post_medical_history")->nullable();
            $table->text("medical_history")->nullable();
            $table->text("drug_allergy")->nullable();
            $table->string("is_smoking", 20)->nullable();
            $table->string("smoking_unit", 10)->nullable();
            $table->string("alcohol", 10)->nullable();
            $table->string("alcohol_unit", 10)->nullable();
            $table->string("recreational_drugs", 10)->nullable();
            $table->string("recreational_drugs_type", 100)->nullable();
            $table->string("occupation", 100)->nullable();
            $table->string("mobility_status")->nullable();
            $table->text("review_of_system")->nullable();
            $table->text("established_signs")->nullable();
            $table->string("febrile", 10)->nullable();
            $table->string("febrile_value", 100)->nullable();
            $table->string("jaundice", 10)->nullable();
            $table->string("jaundice_value", 100)->nullable();
            $table->string("cyanosis", 10)->nullable();
            $table->string("cynosis_value", 100)->nullable();
            $table->string("dehydrated", 10)->nullable();
            $table->string("dehydrated_value", 100)->nullable();
            $table->string("finger_clubbing", 10)->nullable();
            $table->string("pedal_edema", 10)->nullable();
            $table->string("pedal_edema_value", 100)->nullable();


            $table->unsignedInteger("hospital_id");
            $table->foreign("hospital_id")->references('id')->on('hospital_table')->onDelete('cascade');

            $table->unsignedInteger("doctor_id");
            $table->foreign("doctor_id")->references('id')->on('doctor_table')->onDelete('cascade');

            $table->unsignedInteger("patient_id");
            $table->foreign("patient_id")->references('id')->on('patient_table')->onDelete('cascade');

            $table->unsignedInteger("user_id");
            $table->foreign("user_id")->references('id')->on('user_table')->onDelete('cascade');





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
       Schema::drop("general_health_profoma_table");


    }
}
