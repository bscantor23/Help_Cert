<?php

use Illuminate\Database\Seeder;
use App\Region;
use Carbon\Carbon;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create([
            'region_name'=>'Andina',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Region::create([
            'region_name'=>'Caribe',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Region::create([
            'region_name'=>'Insular',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Region::create([
            'region_name'=>'Orinoquía',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Region::create([
            'region_name'=>'Pacífico',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Region::create([
            'region_name'=>'Amazonía',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
