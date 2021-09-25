<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
            'title' => 'PROYECTO I',
            'url' => 'Mi-primer-proyecto',
            'description' => 'Descripcion del proyecto'
        ]);
        DB::table('projects')->insert([
            'title' => 'PROYECTO II',
            'url' => 'Segundo-proyecto',
            'description' => 'Descripcion deL proyecto2'
        ]);
        DB::table('projects')->insert([
            'title' => 'PROYECTO III',
            'url' => 'Tercer proyecto',
            'description' => 'Descripcion del proyect3'
        ]);
    }
}
