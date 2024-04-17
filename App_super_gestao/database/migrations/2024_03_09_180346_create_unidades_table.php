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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade');
            $table->string('descricao');
            $table->timestamps();
        });

        //adicionando o relacionamento da tabela produtos
        Schema::table('produtos', function(Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        //adicionando o relacionamento da tabela produtos_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('produto_detalhes', function(Blueprint $table) {
            //remove a foreign key
            $table->dropForeign('produto_detalhes_unidade_id_foreign');
            //remove a coluna
            $table->dropColumn('unidade_id');
        });

        Schema::table('produtos', function(Blueprint $table) {
            //remove a foreign key
            $table->dropForeign('produtos_unidade_id_foreign');
            //remove a coluna
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades');
    }
};
