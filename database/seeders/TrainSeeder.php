<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
	    DB::table( 'trains' )->insert( [
		    'name'              => 'British Columbia Railway',
		    'image'             => 'columbia.png',
		    'short_description' => 'In 2003, BCOL sold to Canadian National and leased the railroad to CN for 60 years.',
		    'description'       => "CN is a public company with 22,600 employees,[6] and as of July 2019 it has a market cap of approximately CA$90 billion.[7] CN was government-owned, having been a Canadian Crown corporation from its founding in 1919 until being privatized in 1995. As of 2019, Bill Gates is the largest single shareholder of CN stock, owning a 14.2% interest through Cascade Investment and his own Bill and Melinda Gates Foundation.[8]",
		    'started_on'        => 'December 1, 2003',
		    'cost'              => '$35 million ',
		    'speed'             => '41km/hr',
	    ] );

	    DB::table( 'trains' )->insert( [
		    'name'              => 'Savage Alberta Railway',
		    'image'             => 'savae.png',
		    'short_description' => 'In the early 20th century, many governments were taking a more interventionist role in the economy, foreshadowing the influence of economists like John Maynard Keynes. ',
		    'description'       => 'This political trend, combined with broader geo-political events, made nationalization an appealing choice for Canada.',
		    'started_on'        => 'December 1, 2006',
		    'cost'              => '$25 million ',
		    'speed'             => '40km/hr',
	    ] );

	    DB::table('trains')->insert([
		    'name'              => ':name',
		    'image'             => ':image',
		    'short_description' => ':short_description',
		    'description'       => ':description',
		    'started_on'        => ':started_on',
		    'cost'              => ':cost',
		    'speed'             => ':speed',
	    ], [
		    'name'              => 'Mackenzie Northern Railway',
		    'image'             => 'mackenzie.png',
		    'short_description' => 'The need for a viable rail system was paramount in a time of civil unrest and foreign military action.',
		    'description'       => 'In 2006, CN acquired Mackenzie Northern Railway, previously purchased by RailAmerica. This purchase allowed CN to increase their network footprint and hold the northernmost trackage of the contiguous North American railway network. Since being purchased by CN in 2006, it has been officially known as the Meander River Subdivision',
		    'started_on'        => 'January 1, 2006',
		    'cost'              => '$35 million',
		    'speed'             => '30km/hr',
	    ]);

	    DB::table( 'trains' )->insert( [
		    'name'              => 'Wisconsin Central Railroad',
		    'image'             => 'wisconsin.png',
		    'short_description' => 'In January 2001, CN acquired the WC for $800 million.',
		    'description'       => 'Canadian National Railways was born out of both wartime and domestic urgency. Until the rise of the personal automobile and creation of taxpayer-funded all-weather highways, railways were the only viable long-distance land transportation available in Canada. As such, their operation consumed a great deal of public and political attention. Canada was one of many nations to engage in railway nationalization in order to safeguard critical transportation infrastructure during the First World War.',
		    'started_on'        => 'January 2001',
		    'cost'              => '$25 million ',
		    'speed'             => '35km/hr',
	    ] );

	    DB::table( 'trains' )->insert( [
		    'name'              => 'Duluth Missabe & Iron Range Railroad',
		    'image'             => 'duluth.png',
		    'short_description' => "The DM&IR was purchased by Great Lakes Transportation and in 2011 the DM&IR was merged into CN's Wisconsin Central Subsidiary. The DM&IR was acquired at the same time as the Bessemer & Lake Erie Railroad.",
		    'description'       => "he Government of Canada created the Canadian National Railways (CNR) – a body with no corporate powers – through Order in Council as a means to simplify the funding and operation of the various railway companies.[9] The absorption of the Intercolonial Railway would see CNR adopt that system's slogan, The People's Railway.",
		    'started_on'        => 'January 1971',
		    'cost'              => '$20 million ',
		    'speed'             => '36km/hr',
	    ] );

	    DB::table( 'trains' )->insert( [
		    'name'              => 'Elgin, Joliet and Eastern Railway',
		    'image'             => 'elgin.png',
		    'short_description' => "In 2009, CN acquired the Elgin, Joliet and Eastern Railway to assist with traffic congestion in Chicago and the surrounding area. In 2013 EJ&E was merged into the greater Wisconsin Central Subsidiary of CN.",
		    'description'       => "Canadian National Railways was born out of both wartime and domestic urgency. Until the rise of the personal automobile and creation of taxpayer-funded all-weather highways, railways were the only viable long-distance land transportation available in Canada.",
		    'started_on'        => 'January 2009',
		    'cost'              => '$28 million ',
		    'speed'             => '37km/hr',
	    ] );

	    DB::table( 'trains' )->insert( [
		    'name'              => 'Grand Trunk Western Railroad',
		    'image'             => 'grand.png',
		    'short_description' => "The GTW was merged with Central Vermont in 1971 with the creation of the Grand Trunk Corporation.",
		    'description'       => "The GTW was merged with Central Vermont in 1971 with the creation of the Grand Trunk Corporation. In 1991 the GTW was merged with CN under the 'North America' consolidation program. Many of GTWs locomotives and rolling stock would be repainted and the motive power would get the new CN scheme.",
		    'started_on'        => 'January 1971',
		    'cost'              => '$38 million ',
		    'speed'             => '38km/hr',
	    ] );
    }
}
