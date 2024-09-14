<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //Criando o banco de dados
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->increments('id');   //increments == auto_increment
            $table->date('dataEvento');
            $table->longText('descricao');  //longText == textArea
            $table->timestamps();   //Pega dia e hora
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //Excluir banco de dados
    {
        Schema::dropIfExists('registro');
    }
};
