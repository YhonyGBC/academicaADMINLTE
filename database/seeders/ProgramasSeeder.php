<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'codPrograma' => '21',
                'nomPrograma' => 'Ingeniería Civil',
                'facultad' => '20'
            ],
            [
                'codPrograma' => '22',
                'nomPrograma' => 'Ingeniería Electrónica',
                'facultad' => '20'
            ],
            [
                'codPrograma' => '23',
                'nomPrograma' => 'Ingeniería en Sistemas',
                'facultad' => '20'
            ]
        ];
        DB::table('programas')->insert($datos);
    }
}
