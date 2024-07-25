<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		DB::table( 'users' )->insert( [
			'name'              => 'Victor',
			'email'             => 'victor@pace.com',
			'email_verified_at' => now(),
			'password'          => password_hash( 'mypass', PASSWORD_DEFAULT ),
			'remember_token'    => \Illuminate\Support\Str::random( 10 ),
			'is_admin'          => true,
		] );
	}
}
