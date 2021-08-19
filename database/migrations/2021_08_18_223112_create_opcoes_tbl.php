<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcoesTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcoes', function (Blueprint $table) {
            $table->id();
            $table->integer('tema_id')->unsigned();
            $table->foreign('tema_id')->references('id')->on('temas');
            $table->string('opcao');
            $table->integer('quantidade')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opcoes');
    }
}
