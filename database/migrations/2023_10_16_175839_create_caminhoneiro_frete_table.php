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
        Schema::create('caminhoneiro_frete', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('frete_id');
            $table->foreign('frete_id')->on('fretes')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('caminhoneiro_id');
            $table->foreign('caminhoneiro_id')->on('caminhoneiros')->references('id')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caminhoneiro_frete');
    }
};
