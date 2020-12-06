<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarios extends Migration
{

    public function up()
    {
        if(Schema::hasTable('usuarios')){
            Schema::table('usuarios', function(Blueprint $table) {
                $table->increments('idUsuario');
                $table->string('Usuario', 100);
                $table->string('password', 255);
                $table->string('key', 255);
                $table->timestamps();
            });
        }else{
            Schema::create('usuarios', function (Blueprint $table) {
                $table->increments('idUsuario');
                $table->string('Usuario', 100);
                $table->string('password', 255);
                $table->string('key', 255);
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            Schema::dropIfExists('usuarios');
        });
    }
}
