<?php

use Illuminate\Database\Seeder;
use App\Certificate;
use App\Institution;
use App\User;
use Faker\Factory as Faker;
use Carbon\Carbon;

class CertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Schema::disableForeignKeyConstraints();
        Certificate::truncate();
        Schema::enableForeignKeyConstraints();


        $faker= Faker::create();

        $users = User::all()->pluck('id')->toArray();
        $institutions = Institution::all()->pluck('id')->toArray();

        for($i=0;$i<=89;$i++){
            Certificate::create([
                'user_id'=>$faker->randomElement($users),
                'institution_id'=>$faker->randomElement($institutions),
                'generation_date'=>$faker->dateTime,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
