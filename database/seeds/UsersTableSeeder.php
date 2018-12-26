<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([

        	'name'=>'Mahidul Islam',
        	'email'=> 'mahid@gmail.com',
        	'password'=>bcrypt('password')


        ]);
    }
}
