<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

            $table->string('estado');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('cep');
            $table->string('rua');
            $table->integer('numero')->nullable();
            $table->string('complemento')->nullable();
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
        Schema::dropIfExists('enderecos');
    }
}
