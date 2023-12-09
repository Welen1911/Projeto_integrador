<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencas', function (Blueprint $table) {
            $table->id();
            $table->string('empresa')->nullable();
            $table->text('descricao');
            $table->string('trabalhando');
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
        Schema::dropIfExists('experiencas');
    }
}
