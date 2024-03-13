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
        Schema::create('dados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(App\Models\Caminhoneiro::class)->constrained();

            $table->string('celular');
            $table->string('cpf');
            $table->string('antt')->nullable();
            $table->json('veiculos')->nullable();
            $table->json('info_bancarias')->nullable();
            $table->string('semparar')->nullable();
            $table->string('pis')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados');
    }
};
