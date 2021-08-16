<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class ip_activity_historySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ip_activity_history')->insert(
            [
                [
                    'ip' => '192.168.1.59',
                    'countryName' => 'United States',
                    'countryCode' => 'US',
                    'regionName' => 'California',
                    'regionCode' => 'CA',
                    'cityName' => 'Mountain View',
                    'zipCode' => '94043',
                    'latitude' => '37.422',
                    'longitude' => '-122.084',
                    'url' => 'http://localhost/pokedextcg/public/login',
                    'endpoint' => 'login',
                    'params' => '[]',
                    'created_at' => Carbon::now(), # new \Datetime()
                    'updated_at' => Carbon::now(), # new \Datetime()
                ],
                [
                    'ip' => '192.168.1.600',
                    'countryName' => 'United States',
                    'countryCode' => 'US',
                    'regionName' => 'California',
                    'regionCode' => 'CA',
                    'cityName' => 'Mountain View',
                    'zipCode' => '94043',
                    'latitude' => '37.422',
                    'longitude' => '-122.084',
                    'url' => 'http://localhost/pokedextcg/public/pokemon/charizard',
                    'endpoint' => 'pokemon/charizard',
                    'params' => '{"pageSize":"2"}',
                    'created_at' => Carbon::now(), # new \Datetime()
                    'updated_at' => Carbon::now(), # new \Datetime()
                ],
                [
                    'ip' => '192.40.100.40',
                    'countryName' => 'United States',
                    'countryCode' => 'US',
                    'regionName' => 'California',
                    'regionCode' => 'CA',
                    'cityName' => 'Mountain View',
                    'zipCode' => '94043',
                    'latitude' => '37.422',
                    'longitude' => '-122.084',
                    'url' => 'http://localhost/pokedextcg/public/pokemon/mewto',
                    'endpoint' => 'pokemon/mewto',
                    'params' => '{"pageSize":"20"}',
                    'created_at' => Carbon::now(), # new \Datetime()
                    'updated_at' => Carbon::now(), # new \Datetime()
                ],
                [
                    'ip' => '162.140.331.454',
                    'countryName' => 'United States',
                    'countryCode' => 'US',
                    'regionName' => 'California',
                    'regionCode' => 'CA',
                    'cityName' => 'Mountain View',
                    'zipCode' => '94043',
                    'latitude' => '37.422',
                    'longitude' => '-122.084',
                    'url' => 'http://localhost/pokedextcg/public/pokemon/lugia',
                    'endpoint' => 'pokemon/lugia',
                    'params' => '{"pageSize":"15"}',
                    'created_at' => Carbon::now(), # new \Datetime()
                    'updated_at' => Carbon::now(), # new \Datetime()
                ],
            ]
        );
    }
}
