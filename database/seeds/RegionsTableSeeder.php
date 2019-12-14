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
        Schema::disableForeignKeyConstraints();
        Region::truncate();
        Schema::enableForeignKeyConstraints();

        $regions= ['Andina','Caribe','Insular','Orinoquía','Pacífico','Amazonía'];

        for($i=0;$i<=5;$i++){
            Region::create([
                'region_name'=>$regions[$i],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
