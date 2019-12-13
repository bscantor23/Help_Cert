<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Request_StatusesTableSeeder::class);
        $this->call(Document_TypesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(Contract_TypesTableSeeder::class);
        $this->call(Deputy_DirectorsTableSeeder::class);
        $this->call(InstitutionsTableSeeder::class);
        $this->call(Role_UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CertificatesTableSeeder::class);
        $this->call(RequestsTableSeeder::class);
        $this->call(Request_Statuses_HistoriesTableSeeder::class);
        $this->call(ContractsTableSeeder::class);
    }
}
