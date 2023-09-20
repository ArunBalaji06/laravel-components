<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) {
            \App\Models\User::create([
                'name' => Str::random(6),
                'email' => Str::random(4).'@mailinator.com',
                'phone' => rand(1000000000, 9999999999),
            ]);

        }
    }
}
