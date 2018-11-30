<?php

use Illuminate\Database\Seeder;
use App\Cliente;
class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Cliente::create([
            'nombreComercial' => 'Minera 1',
            'ruc' => '12345678911',
            'giroNegocio' => 'Mineria',
            'telefono'=> '4123457',
            'direccion' => 'Sinchi Roca #2865',
        ]);

        Cliente::create([
            'nombreComercial' => 'Minera 2',
            'ruc' => '32145678914',
            'giroNegocio' => 'Mineria 5 ',
            'telefono'=> '12457836',
            'direccion' => 'Av. Nueva Roca #2865',
        ]);

        Cliente::create([
            'nombreComercial' => 'Minera 3',
            'ruc' => '32145678914',
            'giroNegocio' => 'Mineria 5 ',
            'telefono'=> '12457836',
            'direccion' => 'Av. Nueva Roca #2865',
        ]);
    }
}
