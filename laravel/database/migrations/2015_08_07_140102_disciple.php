<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Disciple extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('disciples')){
            Schema::create('disciples',function($table){
                $table->increments('id');
                $table->integer('group_id')->unsigned();
                $table->string('first_name',50);
                $table->string('last_name',50);
                $table->integer('class');
                $table->string('phone',12);
                $table->boolean('active');
                $table->foreign('group_id')->references('id')->on('groups');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciples');
    }
}
