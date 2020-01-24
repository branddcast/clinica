<?php

use Illuminate\Database\Seeder;

class SeederDetallesEspecialistas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Detalles_Especialistas')->insert([
        	'Id_Especialista' => 1,
        	'Id_Especialidad' => 1,
        ]);

        DB::table('Detalles_Especialistas')->insert([
        	'Id_Especialista' => 2,
        	'Id_Especialidad' => 2,
        ]);

        DB::table('Detalles_Especialistas')->insert([
        	'Id_Especialista' => 1,
        	'Id_Especialidad' => 2,
        ]);

        DB::table('Detalles_Especialistas')->insert([
        	'Id_Especialista' => 2,
        	'Id_Especialidad' => 1,
        ]);

        DB::table('Detalles_Especialistas')->insert([
        	'Id_Especialista' => 1,
        	'Id_Especialidad' => 3,
        ]);
    }
}
