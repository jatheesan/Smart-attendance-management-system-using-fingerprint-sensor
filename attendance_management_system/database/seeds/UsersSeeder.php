<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
                'role'=>'1',
               'password'=> Hash::make('12345678'),
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
                'role'=>'0',
               'password'=> Hash::make('12345678'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
