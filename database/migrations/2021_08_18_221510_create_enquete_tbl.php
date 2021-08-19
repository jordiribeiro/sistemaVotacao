<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnqueteTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquete', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->dateTime('criado_em', $precision = 0);
            $table->text('pergunta1');
            $table->text('respostas');
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
        Schema::dropIfExists('enquete');
    }
}
