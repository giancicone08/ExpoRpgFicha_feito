<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpgFichaTable extends Migration
{
 public function up()
 {
 Schema::create('rpg_ficha', function (Blueprint $table) {
 $table->id();
 $table->string('jogador');
 $table->string('nome_personagem');
 $table->string('raca');
 $table->char('genero', 1); // M ou F
 $table->string('classe');
 $table->integer('vigor');
 $table->integer('conhecimento');
 $table->integer('fortitude');
 $table->integer('forca');
 $table->integer('destreza');
 $table->integer('inteligencia');
 $table->integer('fe');
 $table->integer('sorte');
 $table->timestamps();
 });
 }
 public function down()
 {
 Schema::dropIfExists('rpg_ficha');
 }
}
