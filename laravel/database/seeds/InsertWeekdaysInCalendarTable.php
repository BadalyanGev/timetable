<?php

use Illuminate\Database\Seeder;

class InsertWeekdaysInCalendarTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insertArray = [
        	['weekday_name' => 'Monday'],
        	['weekday_name' => 'Tuesday'],
        	['weekday_name' => 'Wednesday'],
        	['weekday_name' => 'Thursday'],
        	['weekday_name' => 'Friday'],
        	['weekday_name' => 'Saturday'],
        	['weekday_name' => 'Sunday'],
        ];
        DB::table('calendar')->insert($insertArray);
    }
}
