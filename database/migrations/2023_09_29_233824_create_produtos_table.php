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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('categoria_id');
            $table->text('descricao');
            $table->enum('status_disponibilidade',['em_estoque','fora_estoque','pre_venda','descontinuado']);
            $table->integer('quantidade');
            $table->string('imagem')->nullable();
            $table->date('data_vencimento')->nullable();
            $table->foreign('categoria_id')->on('categoria_produtos')->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
