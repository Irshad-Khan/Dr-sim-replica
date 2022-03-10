<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = public_path('csv/countries.csv');
        $countries = csvToArray($file);
        for ($i = 0; $i < count($countries); $i++) {
            DB::table('countries')->insert([
                'id' =>  $countries[$i]['id'],
                'name' =>  $countries[$i]['name'],
                'iso3' =>  $countries[$i]['iso3'],
                'iso2' =>  $countries[$i]['iso2'],
                'numeric_code' =>  $countries[$i]['numeric_code'],
                'phone_code' =>  $countries[$i]['phone_code'],
                'capital' =>  $countries[$i]['capital'],
                'currency' =>  $countries[$i]['currency'],
                'currency_name' =>  $countries[$i]['currency_name'],
                'currency_symbol' =>  $countries[$i]['currency_symbol'],
                'native' =>  $countries[$i]['native'],
                'region' =>  $countries[$i]['region'],
                'timezones' =>  $countries[$i]['timezones'],
                'latitude' =>  $countries[$i]['latitude'],
                'longitude' =>  $countries[$i]['longitude'],
                'emoji' =>  $countries[$i]['emoji']
            ]);
        }
    }
}
