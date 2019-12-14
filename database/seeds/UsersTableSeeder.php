<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Document_Type;
use App\Gender;
use App\Role_User;
use App\City;
use App\Institution;
use Faker\Factory as Faker;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();
        $fakerS= Faker::create('es_ES');

        $document_types = Document_Type::all()->pluck('id')->toArray();
        $genders = Gender::all()->pluck('id')->toArray();
        $institutions = Institution::all()->pluck('id')->toArray();
        $cities = City::all()->pluck('id')->toArray();
        $roles = Role_User::all()->pluck('id')->toArray();


        for($i=0;$i<=49;$i++){

            $name= $faker->firstName." ".$faker->firstName;
            $lname= $faker->lastName;
            $var = explode(" ", $name);
            $email= strtolower($var[0][0].$var[1][0].$lname).$faker->numberBetween($min=1,$max=20)."@misena.edu.co";


            User::create([
                'document_type_id'=>$faker->randomElement($document_types),
                'role_user_id'=>$faker->randomElement($roles),
                'institution_id'=>$faker->randomElement($institutions),
                'city_id'=>$faker->randomElement($cities),
                'gender_id'=>$faker->randomElement($genders),
                'email'=>$email,
                'password'=>bcrypt($faker->password),
                'document_number'=>$fakerS->unique()->dni,
                'user_photo'=>'tmp/photo_profile/'.bcrypt($faker->word).'.jpg',
                'username'=>$var[0]." ".$lname,
                'names'=>$name,
                'lastnames'=>$lname,
                'phone_number'=>$fakerS->mobileNumber,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
