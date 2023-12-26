<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('users')
        ->where('email', 'admin@admin.com')
        ->update([
            'name' => 'Admin User Updated',
            'password' => Hash::make('admin@admin.com'),
            'is_admin' => 'admin',
            'updated_at' => now(),
        ]);
        if (!DB::table('users')->where('email', 'admin@admin.com')->exists()) {
            DB::table('users')->insert([
                'name' => 'Admin User',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin@admin.com'),
                'is_admin' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }


        DB::table('users')
        ->where('email', 'user@user.com')
        ->update([
            'name' => 'user User Updated',
            'password' => Hash::make('user@user.com'),
            'is_admin' => 'employee',
            'updated_at' => now(),
        ]);
        if (!DB::table('users')->where('email', 'user@user.com')->exists()) {
            DB::table('users')->insert([
                'name' => 'user User',
                'email' => 'user@user.com',
                'password' => Hash::make('user@user.com'),
                'is_admin' => 'employee',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        
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
