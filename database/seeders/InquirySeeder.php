<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InquirySeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		DB::table( 'inquiries' )->insert( [
			'name'    => ':name',
			'email'   => ':email',
			'phone'   => ':phone',
			'message' => ':message',
		], [
			'name'    => 'Manish',
			'email'   => 'manish@test.com',
			'phone'   => '4318662678',
			'message' => 'In 2006, CN acquired Mackenzie Northern Railway, previously purchased by RailAmerica. This purchase allowed CN to increase their network footprint and hold the northernmost trackage of the contiguous North American railway network. Since being purchased by CN in 2006, it has been officially known as the Meander River Subdivision',
		] );

		DB::table( 'inquiries' )->insert( [
			'name'    => ':name',
			'email'   => ':email',
			'phone'   => ':phone',
			'message' => ':message',
		], [
			'name'    => 'Imran',
			'email'   => 'imran@test.com',
			'phone'   => '4318662673',
			'message' => 'In 2006, CN acquired Mackenzie Northern Railway, previously purchased by RailAmerica. This purchase allowed CN to increase their network footprint and hold the northernmost trackage of the contiguous North American railway network. Since being purchased by CN in 2006, it has been officially known as the Meander River Subdivision',
		] );
	}
}
