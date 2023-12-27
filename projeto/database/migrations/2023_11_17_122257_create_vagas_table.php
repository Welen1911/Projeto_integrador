<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('empresa_id');
            $table->foreign('empresa_id')
            ->references('id')->on('empresas')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            
            $table->string('titulo');
            $table->text('descricao');

            $table->foreignId('area_id')->nullable();
            $table->foreign('area_id')
            ->references('id')->on('areas');
            
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
        Schema::dropIfExists('vagas');
    }
}
