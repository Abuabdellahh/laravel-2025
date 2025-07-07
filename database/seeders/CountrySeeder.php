<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'United States', 'code' => 'USA'],
            ['name' => 'Canada', 'code' => 'CAN'],
            ['name' => 'United Kingdom', 'code' => 'GBR'],
            ['name' => 'Ethiopia', 'code' => 'ETH'],
            ['name' => 'Germany', 'code' => 'DEU'],
            ['name' => 'Italy', 'code' => 'ITA'],
            ['name' => 'France', 'code' => 'FRA'],
            ['name' => 'Spain', 'code' => 'ESP'],
            ['name' => 'Portugal', 'code' => 'PRT'],
            ['name' => 'Greece', 'code' => 'GRC'],
            ['name' => 'Turkey', 'code' => 'TUR'],
            ['name' => 'Egypt', 'code' => 'EGY'],
            ['name' => 'Japan', 'code' => 'JPN'],
            ['name' => 'China', 'code' => 'CHN'],
            ['name' => 'India', 'code' => 'IND'],
            ['name' => 'Brazil', 'code' => 'BRA'],
            ['name' => 'Argentina', 'code' => 'ARG'],
            ['name' => 'Mexico', 'code' => 'MEX'],
            ['name' => 'Colombia', 'code' => 'COL'],
            ['name' => 'Peru', 'code' => 'PER'],
            ['name' => 'Chile', 'code' => 'CHL'],
            ['name' => 'Argentina', 'code' => 'ARG'],
            ['name' => 'Mexico', 'code' => 'MEX'],
            ['name' => 'Colombia', 'code' => 'COL'],
            ['name' => 'Peru', 'code' => 'PER'],
            ['name' => 'Chile', 'code' => 'CHL'],
            ['name' => 'Argentina', 'code' => 'ARG'],
            ['name' => 'Mexico', 'code' => 'MEX'],
            ['name' => 'Colombia', 'code' => 'COL'],
            ['name' => 'Peru', 'code' => 'PER'],
            ['name' => 'Chile', 'code' => 'CHL'],
            ['name' => 'Argentina', 'code' => 'ARG'],
            ['name' => 'Mexico', 'code' => 'MEX'],
            ['name' => 'Colombia', 'code' => 'COL'],
            ['name' => 'Peru', 'code' => 'PER'],
            ['name' => 'Chile', 'code' => 'CHL'],
            ['name' => 'Argentina', 'code' => 'ARG'],
            ['name' => 'Mexico', 'code' => 'MEX'],
            ['name' => 'Colombia', 'code' => 'COL'],
            ['name' => 'Peru', 'code' => 'PER'],
            ['name' => 'Chile', 'code' => 'CHL'],
            ['name' => 'Argentina', 'code' => 'ARG'],
            ['name' => 'Mexico', 'code' => 'MEX'],
            ['name' => 'Colombia', 'code' => 'COL'],
            ['name' => 'Peru', 'code' => 'PER'],
            ['name' => 'Chile', 'code' => 'CHL'],
            ['name' => 'Argentina', 'code' => 'ARG'],
            ['name' => 'Mexico', 'code' => 'MEX'],
            ['name' => 'Colombia', 'code' => 'COL'],
            ['name' => 'Peru', 'code' => 'PER'],
        ];

        DB::table('countries')->insert($countries);
    }
}
