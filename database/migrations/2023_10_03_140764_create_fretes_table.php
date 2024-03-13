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
        Schema::create('fretes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('codigo')->nullable();

            $table->integer('status')->default(0);

            $table->integer('tipo')->default(0);

            $table->unsignedBigInteger('atributos_id');
            $table->foreign('atributos_id')->references('id')->on('atributos')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('caminhoneiro_id')->nullable();
            $table->foreign('caminhoneiro_id')->on('caminhoneiros')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->text('msg_cancelado')->nullable();

            $table->timestamp('data_ativo')->nullable();
            $table->timestamp('data_progresso')->nullable();
            $table->timestamp('data_concluido')->nullable();
            $table->timestamp('data_cancelado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fretes');
    }
};
