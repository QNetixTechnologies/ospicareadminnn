<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GeneralHealthProformaImagesEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("profoma_images_table", function(Blueprint $table){
            $table->engine = "InnoDB";

            $table->increments("id");

           $table->string("image_path", 200)->nullable();


            $table->unsignedInteger("general_health_profoma_id");
            $table->foreign("general_health_profoma_id")->references('id')->on('general_health_profoma_table')->onDelete('cascade');





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
        Schema::drop("profoma_images_table");
    }
}
