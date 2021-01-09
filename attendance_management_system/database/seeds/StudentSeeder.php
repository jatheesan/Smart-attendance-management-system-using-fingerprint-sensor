<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students') -> insert([
            'st_name' => 'student1',
            'st_regno' => '2016/CSC/100',
            'st_level' => '2S',
            'st_acyear' => '2016',
            
        ]);
    }
}
