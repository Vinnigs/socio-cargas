<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atributos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Infos Origem e Destino.
            $table->json('endereco_origem')->nullable();
            $table->json('endereco_destino')->nullable();

            // Infos Frete.
            $table->string('produto')->nullable();
            $table->string('valor')->nullable();
            $table->string('tipo_carga')->nullable();
            $table->string('especie')->nullable();
            $table->integer('km')->nullable();

            // Infos Caminhão.
            $table->json('veiculos_pesados')->nullable();
            $table->json('veiculos_medios')->nullable();
            $table->json('veiculos_leves')->nullable();
            $table->json('carroceria')->nullable();
            $table->boolean('lona')->nullable();
            $table->boolean('agenciamento')->nullable();
            $table->json('peso')->nullable();

            $table->boolean('pedagio')->nullable();
            $table->boolean('rastreador')->nullable();

            // Infos Pagamentos.
            $table->json('pagamento')->nullable();

            // Observações para o caminhoneiro;
            $table->text('observacoes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atributos');
    }
};
