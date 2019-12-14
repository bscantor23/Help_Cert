<?php

use Illuminate\Database\Seeder;
use App\Deputy_Director;
use App\Gender;
use App\Document_Type;
use Carbon\Carbon;
use Faker\Factory as Faker;


class Deputy_DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Deputy_Director::truncate();
        Schema::enableForeignKeyConstraints();

        $faker=Faker::create();
        $fakerS=Faker::create('es_ES');


        $genders = Gender::all()->pluck('id')->toArray();
        $document_types = Document_Type::all()->pluck('id')->toArray();


        for($i=0;$i<=19;$i++){

            $name= $faker->firstName." ".$faker->firstName;
            $lname= $faker->lastName;
            $var = explode(" ", $name);
            $email= strtolower($var[0][0].$var[1][0].$lname).$faker->numberBetween($min=1,$max=20)."@misena.edu.co";

            Deputy_Director::create([
                'document_type_id'=>$faker->randomElement($document_types),
                'gender_id'=>$faker->randomElement($genders),
                'deputy_director_names'=>$name,
                'deputy_director_lastnames'=> $lname,
                'document_number'=>$fakerS->unique()->dni,
                'phone_number'=>$fakerS->mobileNumber,
                'email'=>$email,
                'digital_firm'=>'tmp/firms/'.bcrypt($faker->word).'.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
