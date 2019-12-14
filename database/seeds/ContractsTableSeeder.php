<?php

use Illuminate\Database\Seeder;
use App\Contract;
use App\Contract_Type;
use App\User;
use Faker\Factory as Faker;
use Carbon\Carbon;


class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Contract::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();

        $users = User::all()->pluck('id')->toArray();
        $contract_types = Contract_Type::all()->pluck('id')->toArray();

        for($i=0;$i<=349;$i++){
            $y=2019;

            if($i == 234){
                $y=$y++;
            }

            Contract::create([
                'user_id'=>$faker->randomElement($users),
                'contract_type_id'=>$faker->randomElement($contract_types),
                'number_contract'=>$i++."_".$y,
                'generation_date'=>$faker->dateTime,
                'contract_start_date'=>$faker->dateTime,
                'contract_end_date'=>$faker->dateTime,
                'contract_term'=>$faker->sentence,
                'way_pay'=>$faker->sentence,
                'contract_total_pay'=>$faker->randomNumber($nbDigits=7),
                'contract_information_term'=>$faker->sentence,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
