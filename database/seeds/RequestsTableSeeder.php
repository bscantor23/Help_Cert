<?php

use Illuminate\Database\Seeder;
use App\Request;
use App\Certificate;
use App\User;
use Faker\Factory as Faker;
use Carbon\Carbon;


class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Request::truncate();
        Schema::enableForeignKeyConstraints();


        $faker = Faker::create();

        $users = User::all()->pluck('id')->toArray();
        $certificates = Certificate::all()->pluck('id')->toArray();

        for($i=0;$i<=99;$i++){
            Request::create([
                'certificate_id'=>$faker->randomElement($certificates),
                'user_id'=>$faker->randomElement($users),
                'date_request'=>$faker->dateTime,
                'affair'=>$faker->sentence,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
