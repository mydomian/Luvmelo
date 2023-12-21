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

        DB::table('users')
        ->where('email', 'admin@admin.com')
        ->update([
            'name' => 'Admin User Updated',
            'password' => Hash::make('newpassword'),
            'is_admin' => 'admin',
            'updated_at' => now(),
        ]);
        if (!DB::table('users')->where('email', 'admin@admin.com')->exists()) {
            DB::table('users')->insert([
                'name' => 'Admin User',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'is_admin' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }


        DB::table('users')
        ->where('email', 'user@user.com')
        ->update([
            'name' => 'user User Updated',
            'password' => Hash::make('newpassword'),
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

        

    }
}
