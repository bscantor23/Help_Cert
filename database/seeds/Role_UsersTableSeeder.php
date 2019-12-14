<?php

use Illuminate\Database\Seeder;
use App\Role_User;
use Carbon\Carbon;

class Role_UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role_User::truncate();
        Schema::enableForeignKeyConstraints();
        
        Role_User::create([
            'rol_user_name'=>'Admin Controller',
            'create'=>1,
            'update'=>1,
            'read'=>1,
            'disable'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Role_User::create([
            'rol_user_name'=>'Funcionario',
            'create'=>1,
            'update'=>0,
            'read'=>1,
            'disable'=>0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

    }
}
