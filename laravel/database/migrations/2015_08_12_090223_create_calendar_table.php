<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('calendar')){
            Schema::create('calendar',function($table){
                $table->increments('id');
                $table->integer('group_id')->unsigned()->nullable();
                $table->time('start_date');
                $table->float('length');
                $table->string('weekday_name');

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
        Schema::dropIfExists('calendar');
    }
}
