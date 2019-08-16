<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientTypeEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("patient_type_table", function(Blueprint $table){
            $table->engine = "InnoDB";

            $table->increments("id");
            $table->string("name",50)->nullable();


            $table->timestamps();
        });



        DB::table('patient_type_table')->insert(
            array(
                ['name' => 'general ward'],
                ['name' => 'labor ward'],
                ['name' => 'Antenatal']
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("patient_type_table");
    }
}
