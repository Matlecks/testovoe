<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $symbolyc_code = explode(' ', $faker->name)[1];
            DB::table('users')->insert([
                'name' => $faker->name,
                'symbolyc_code' => $symbolyc_code,
                'email' => $faker->unique()->safeEmail,
                'balance' => $faker->randomFloat(2, 0, 1000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
