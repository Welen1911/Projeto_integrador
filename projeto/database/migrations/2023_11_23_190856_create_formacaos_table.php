<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacaos', function (Blueprint $table) {
            $table->id();
            $table->string('instituto');
            $table->string('tipo');
            $table->string('curso');
            $table->string('cursando');
            
            $table->foreignId('candidato_id');
            $table->foreign('candidato_id')
            ->references('id')->on('candidatos')
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
        Schema::dropIfExists('formacaos');
    }
}
