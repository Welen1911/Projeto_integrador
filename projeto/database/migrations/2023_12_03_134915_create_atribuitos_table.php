<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtribuitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atribuitos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');

            $table->foreignId('vaga_id');
            $table->foreign('vaga_id')
            ->on('vagas')
            ->references('id')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            
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
        Schema::dropIfExists('atribuitos');
    }
}
