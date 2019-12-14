<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\City;
use App\Region;


class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        City::truncate();
        Schema::enableForeignKeyConstraints();

        $faker= Faker::create();
        $regions = Region::all()->pluck('id')->toArray();

        City::create([
            'region_id'=>1, // Región Andina
            'city_name'=>'Bogotá D.C',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        City::create([
            'region_id'=>2, // Región Caribe
            'city_name'=>'Cartagena',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);


        for($i=0;$i<=198;$i++){ // 200 registros
            City::create([
                'region_id'=>$faker->randomElement($regions),
                'city_name'=>$faker->city,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }

    }
}
