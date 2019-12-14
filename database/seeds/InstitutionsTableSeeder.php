<?php

use Illuminate\Database\Seeder;
use App\Institution;
use App\Deputy_Director;
use App\City;
use Faker\Factory as Faker;
use Carbon\Carbon;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Institution::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();
        $fakerNIT= Faker::create('fr_CH');
        $fakerS=Faker::create('es_ES');

        $deputy_directors= Deputy_Director::all()->pluck('id')->toArray();
        $cities = City::all()->pluck('id')->toArray();

        $names=[
            'SENA Centro Nacional de Hotelería, Turismo y Alimentos',
            'SENA Centro de Manufactura en Textil y Cuero',
            'SENA Centro de Gestión de Mercados, Logística y Tecnologías de la Información',
            'SENA Centro de Tecnologías para Construcción y las Maderas',
            'SENA Centro de Gestión Administrativa',
            'SENA Centro de Gestión Industrial',
            'SENA Centro de Servicios Financieros',
            'SENA Centro de Formación de Talento Humano en Salud',
            'SENA Centro de Tecnologías del Transporte',
            'SENA Centro de Diseño y Metrología',
            'SENA Antiguo Publicaciónes',
            'SENA Centro de Gestión y Fortalecimiento Socio – Empresarial',
            'SENA Centro de actividad física y cultura',
            'SENA Centro de Electricidad, Electrónica y Telecomunicaciones'
        ];

        for($i=0;$i<=13;$i++){
            Institution::create([
                'deputy_director_id'=>$faker->randomElement($deputy_directors),
                'city_id'=>$faker->randomElement($cities),
                'nit'=>$fakerNIT->unique()->avs13,
                'institution_name'=>$names[$i],
                'address'=>$faker->streetAddress,
                'phone_number'=>$fakerS->mobileNumber,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
