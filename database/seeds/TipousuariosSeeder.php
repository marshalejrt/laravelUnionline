<?php

use Illuminate\Database\Seeder;

class TipousuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipousuarios')->insert([
            'descripcion' => 'Administrador'
        ]);
        DB::table('tipousuarios')->insert([
            'descripcion' => 'Estudiante Monitor'
        ]);
        DB::table('tipousuarios')->insert([
            'descripcion' => 'Estudiante Consultor'
        ]);
    }
}
