<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        DB::table('alunos')->insert([

            
            //['nome' => 'Ana Silva', 'email' => 'ana@ifms.edu.br','data_nascimento' => '2000-01-01', 'curso' => 'Sistemas de Informação'],
            //['nome' => 'Analy de Lima', 'email' => 'rocha@ifms.edu.br','data_nascimento' => '2007-09-04', 'curso' => 'Informática'],
            //['nome' => 'Guilherme Ghizoni', 'email' => 'ribeiro5@ifms.edu.br','data_nascimento' => '2007-11-30', 'curso' => 'Informática'],


        ]);
    }
}
