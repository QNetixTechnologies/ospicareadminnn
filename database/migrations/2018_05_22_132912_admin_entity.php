<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("admin_table", function(Blueprint $table){
            $table->engine = "InnoDB";

            $table->increments("id");
            $table->string("full_names",30)->nullable();
            $table->string("email",50)->nullable();
            $table->string("password",100)->nullable();
            $table->string("status",10)->nullable();
            $table->string("token",50)->nullable();
            $table->string("role",15)->nullable();


            $table->timestamps();
        });


        DB::table('admin_table')->insert(
            array(
                'full_names' => 'Administrator',
                'email' => 'admin@ospicare.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'status' => 'enable',
                'token' => '96e79218965eb72c92a549dd5a330112',
                'role' => 'admin'
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
        Schema::drop("admin_table");
    }
}
