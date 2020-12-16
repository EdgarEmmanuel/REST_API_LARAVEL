<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class insertUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //empty the table 
        User::truncate();


        //create a hashed password
        $password = Hash::make("toptal");


        //create an admin firstly
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => $password,
        ]);

        //get the faker factory
        $faker = \Faker\Factory::create();


        for($i=0;$i<10;$i++){
            User::create([
                'name'=>$faker->name,
                 'email'=> $faker->email, 
                 'password' => $password
            ]);
        }
    }
}
