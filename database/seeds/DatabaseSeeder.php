<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        // $this->call(EmpresasTableSeeder::class);
        // $this->call(FodasTableSeeder::class);
        // $this->call(FactoresTableSeeder::class);
        // $this->call(EstrategiasTableSeeder::class);
        // $this->call(Estrategias_FactoresTableSeeder::class);
    }
}
