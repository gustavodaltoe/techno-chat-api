<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagem', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('conteudo');
            $table->integer('fk_id_participante')->unsigned();
            $table->foreign('fk_id_participante')
                ->references('id')
                ->on('participante')
                ->onDelete('cascade');
            $table->integer('fk_id_chat')->unsigned();
            $table->foreign('fk_id_chat')
                ->references('id')
                ->on('chat')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensagem');
    }
}
