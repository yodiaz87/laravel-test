<?php

use App\User;
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

        User::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            User::create([
                'email' => $faker->email,
                'name' => $faker->name,
                'password' => $faker->password,
            ]);
        }
    }
}
