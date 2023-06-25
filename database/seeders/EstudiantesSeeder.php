<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fechaCreacion = Carbon::now();
        $datos =[
            [
                'codEstudiante' => '0001',
                'nomEstudiante' => 'Jhonattan Benavides',
                'edaEstudiante' => '25',
                'fechEstudiante' => $fechaCreacion,
                'sexEstudiante' => 'M',
                'ciudad' => '001',
                'barrio' => '385',
                'programa' => '34',
            ],
            [
                'codEstudiante' => '0002',
                'nomEstudiante' => 'Juan Guzmán',
                'edaEstudiante' => '29',
                'fechEstudiante' => $fechaCreacion,
                'sexEstudiante' => 'M',
                'ciudad' => '001',
                'barrio' => '385',
                'programa' => '34',
            ],
            [
                'codEstudiante' => '0003',
                'nomEstudiante' => 'Stiven Atis',
                'edaEstudiante' => '22',
                'fechEstudiante' => $fechaCreacion,
                'sexEstudiante' => 'M',
                'ciudad' => '001',
                'barrio' => '385',
                'programa' => '34',
            ],
        ];
        DB::table('estudiantes')->insert($datos);
    }
}
