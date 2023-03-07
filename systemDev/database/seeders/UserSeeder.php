<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

     //create 10 sample susers for the DB
     //from userFactory
    public function run()
    {

        \App\Models\User::factory()->create([
           'first_name' => 'Big',
           'last_name' => 'Daddy',
           'username' => 'bigdaddy',
            'email' => 'bigdaddy@sugar.com',
             'dob'=> '1973-06-09',
             'license_accepted'=>true
        ]);
    }
}
