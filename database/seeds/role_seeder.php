<?php

use Illuminate\Database\Seeder;

class role_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nombre'=>'administrador'
        ]);
        DB::table('roles')->insert([
            'nombre'=>'usuario'
        ]);
    }
}
