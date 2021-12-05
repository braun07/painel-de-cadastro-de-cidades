<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $cities = json_decode(file_get_contents(database_path('data/cities.json')), true);

            City::upsert($cities, 'ibge_cod');
        }
    }
}
