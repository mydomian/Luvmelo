<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        // ]);
        \App\Models\Week::create([
            'day' => 'Sunday',
            'short_form' => 'Sun'
        ]);
        \App\Models\Week::create([
            'day' => 'Monday',
             'short_form' => 'Mon'
        ]);
        \App\Models\Week::create([
            'day' => 'Tuesday',
             'short_form' => 'Tue'
        ]);
        \App\Models\Week::create([
            'day' => 'Wednesday',
             'short_form' => 'Wed'
        ]);
        \App\Models\Week::create([
            'day' => 'Thursday',
             'short_form' => 'Thu'
        ]);
        \App\Models\Week::create([
            'day' => 'Friday',
             'short_form' => 'Fri'
        ]);
        \App\Models\Week::create([
            'day' => 'Saturday',
             'short_form' => 'Sat'
        ]);
    }
}
