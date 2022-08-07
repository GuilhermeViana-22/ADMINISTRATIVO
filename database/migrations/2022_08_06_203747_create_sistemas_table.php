<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemas', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamps();
            $table->string('nome_sistema');
            $table->string('url');
            $table->string('rota_api');
            $table->integer('qtd_usuarios');
            $table->integer('situacao_id');
            $table->text('token');
            $table->integer('ativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistemas');
    }
}
