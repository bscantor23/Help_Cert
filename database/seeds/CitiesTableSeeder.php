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
        $faker= Faker::create();
        $regions = Region::all()->pluck('id')->toArray();

        Ciudad::create([
            'region_id'=>1, // Región Andina
            'city_name'=>'Bogotá D.C',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Ciudad::create([
            'region_id'=>2, // Región Caribe
            'city_name'=>'Cartagena',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);


        for($i=0;$i<=997;$i++){ // 998 registros
            Ciudad::create([
                'region_id'=>randomElement($regions),
                'city_name'=>$faker->city,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }

    }
}
