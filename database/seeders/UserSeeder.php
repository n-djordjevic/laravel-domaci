<?php

namespace Database\Seeders;

// failed attempt at using model factories
// use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()
        //     ->count(2)
        //     ->create();
        DB::table('users')->insert([
            [
                'name' => 'Marko Kraljevic',
                'email' => 'kralj.najveci@gmail.com',
                'password' => 'gospodar'
            ],
            [
                'name' => 'Car Dusan',
                'email' => 'car.najveci@gmail.com',
                'password' => 'car'
            ],
            [
                'name' => 'Patrijarh Pavle',
                'email' => 'patrijarh.najveci@gmail.com',
                'password' => 'dusevnicovek'
            ]

        ]);
    }
}
