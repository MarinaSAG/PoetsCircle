<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class insertar_usuarios extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            'Usuario' => 'marina.santaanna',
            'password' => '12345',
            'key' => 'marina'
        ]);
    }
}
