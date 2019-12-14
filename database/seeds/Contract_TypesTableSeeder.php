<?php

use Illuminate\Database\Seeder;
use App\Contract_Type;
use Carbon\Carbon;
use Faker\Factory as Faker;

class Contract_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Contract_Type::truncate();
        Schema::enableForeignKeyConstraints();


        $ex1="Que el (la) señor(a) _, identificado (a) con _ No. _ de Bogotá DC, celebró con EL SERVICIO NACIONAL DE APRENDIZAJE SENA, el (los) siguiente(s) contrato(s) de prestación de servicios personales regulados por la Ley 80 de 1993 (Estatuto General de Contratación de la Administración Pública), modificada por la Ley 1150 de 2007, Decreto 1082 de 2015 y sus demás decretos o normas reglamentarias, como se describe a continuación:";

        $ex2 = "1. Participar en aspectos técnicos para el área de electricidad. 2. Apoyar en el montaje, implementación, mantenimiento, de material didáctico. 3. Apoyar el acompañamiento y brindar soporte al centro de formación en la ejecución de procesos del área eléctrica, 4. Apoyar en el suministro de la información a los instrumentos, insumos y documentos requeridos para la transferencia de Conocimiento. 5. Presentar informes periódicos sobre las actividades realizadas ante las dependencias y entidades que lo requieran. 6. Participar de las reuniones y actividades que sean requeridas para la adecuada ejecución del contrato. 7. Las demás que se requieran para desarrollar el objeto del contrato";

        $ex3 = "La prestación de servicios personales para apoyar a las regionales y al centro de electricidad electrónica ytelecomunicaciones en aspectos tecnológicos para la participación del Sena en competencias de alto rendimiento en habilidades worldskills. ";

        $faker=Faker::create();

        Contract_Type::create([
            'contract_code'=>$faker->numberBetween($min=1000, $max=9999),
            'introductory_text' => $ex1,
            'specific_obligations' => $ex2,
            'object_contract' => $ex3,
            'seals' => 'tmp/seals/'.bcrypt($faker->unique()->word).'.jpg',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        for($i=0; $i<=5; $i++){
            
            // Diseñado para enumerar las oraciones que tendrá specific_obligations

            $obj = "";
            $j=1;
            $vars = $faker->sentences($nb= $faker->numberBetween($min=3, $max=7));
            foreach($vars as $var){
                $obj = $obj.$j.". ".$var." ";
                $j++;
            }


            Contract_Type::create([
                'contract_code' =>$faker->numberBetween($min=1000, $max=9999),
                'introductory_text'=>$faker->text($maxNbChars = 1200),
                'specific_obligations'=>$obj,
                'object_contract'=>$faker->text($maxNbChars = 400),
                'seals' => 'tmp/seals/'.bcrypt($faker->unique()->word).'.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }

    }
}
