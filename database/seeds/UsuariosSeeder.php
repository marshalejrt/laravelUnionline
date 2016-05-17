<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'email' => 'admin@unionline.com',
            'password' => bcrypt('123123'),
            'nombre' => 'Usuario',
            'apellido'=>'Administrador',
            'tipousuario_id'=>1,
        ]);

    }
}
