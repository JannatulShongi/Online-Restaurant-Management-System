<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'shongi',
            'email'=>'shongi@gmail.com',
            'mobile'=>'016',
            'address'=>'dhaka',
            'role'=>'admin',
            'password'=>bcrypt('12345')

        ]);


    }
}
