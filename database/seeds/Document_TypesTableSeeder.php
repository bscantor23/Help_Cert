<?php

use Illuminate\Database\Seeder;
use App\Document_Type;
use Carbon\Carbon;

class Document_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document_Type::create([
            'document_type_name'=> 'Tarjeta de Identidad',
            'abbreviation' => 'TI',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Document_Type::create([
            'document_type_name'=> 'Cédula de Ciudadanía',
            'abbreviation' => 'CC',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Document_Type::create([
            'document_type_name'=> 'Documento Nacional de Identidad',
            'abbreviation' => 'DNI',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Document_Type::create([
            'document_type_name'=> 'Cédula de Extranjería',
            'abbreviation' => 'CE',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Document_Type::create([
            'document_type_name'=> 'Registro Civil',
            'abbreviation' => 'RC',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
