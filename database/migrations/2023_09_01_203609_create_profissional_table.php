<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profissional', function (Blueprint $table) {
            
            $table->id();
            $table->string('denominacao');
            $table->string('nome');
            $table->string('especialidade');
            $table->string('conselho_classe');
            $table->string('endereco');
            $table->string('numero');
            $table->string('telefone');
            $table->string('email');
            $table->text('descricao');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profissional');
        
    }
};
