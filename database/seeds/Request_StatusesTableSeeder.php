<?php

use Illuminate\Database\Seeder;
use App\Request_Status;
use Carbon\Carbon;

class Request_StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Request_Status::truncate();
        Schema::enableForeignKeyConstraints();

        
        Request_Status::create([
            'request_status_name'=>'En Espera',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Request_Status::create([
            'request_status_name'=>'En Revisión',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Request_Status::create([
            'request_status_name'=>'Firma Faltante',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Request_Status::create([
            'request_status_name'=>'Disponible',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
