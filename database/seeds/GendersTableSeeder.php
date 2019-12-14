<?php

use Illuminate\Database\Seeder;
use App\Gender;
use Carbon\Carbon;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Gender::truncate();
        Schema::enableForeignKeyConstraints();

        Gender::create([
            'gender_name'=>'Masculino',
            'abbreviation'=>'M',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Gender::create([
            'gender_name'=>'Femenino',
            'abbreviation'=>'F',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Gender::create([
            'gender_name'=>'Otro',
            'abbreviation'=>'O',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
