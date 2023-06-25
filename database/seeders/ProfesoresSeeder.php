<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;


class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $datos =[
            [
                'codProfesor' => '20',
                'nomProfesor' => 'Hortencia Guaquez',
                'catProfesor' => 'Ocasional',
            ],
            [
                'codProfesor' => '21',
                'nomProfesor' => 'Joaquín Hernández',
                'catProfesor' => 'Cátedra',
            ],
            [
                'codProfesor' => '22',
                'nomProfesor' => 'Julissa Mera',
                'catProfesor' => 'Completo',
            ]
        ];
        DB::table('profesores')->insert($datos);
    }
}
