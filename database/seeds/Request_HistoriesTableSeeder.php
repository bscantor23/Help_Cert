<?php

use Illuminate\Database\Seeder;
use App\Request;
use App\Request_History;
use App\Request_Status;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Request_HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Request_History::truncate();
        Schema::enableForeignKeyConstraints();


        $faker = Faker::create();

        $request_statuses = Request_Status::all()->pluck('id')->toArray();
        $requests = Request::all()->pluck('id')->toArray();

        for($i=0;$i<=69;$i++){
            Request_History::create([
                'request_status_id'=>$faker->randomElement($request_statuses),
                'request_id'=>$faker->randomElement($requests),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
