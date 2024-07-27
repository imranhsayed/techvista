<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        // Admin user
        DB::table('users')->insert([
            'name'              => 'admin',
            'email'             => 'admin@pace.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('mypass'), // Use Hash facade
            'remember_token'    => Str::random(10),
            'is_admin'          => true,
        ]);

        // Regular user
        DB::table('users')->insert([
            'name'              => 'Regular User',
            'email'             => 'user@pace.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('mypass'), // Use Hash facade
            'remember_token'    => Str::random(10),
            'is_admin'          => false,
        ]);
    }
}
