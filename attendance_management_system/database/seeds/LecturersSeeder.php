<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecturers') -> insert([
            'lect_name' => 'srijathee',
            'lect_email' => 'srijathee@gmail.com',
            'position' => 'HOD',
        ]);
    }
}
