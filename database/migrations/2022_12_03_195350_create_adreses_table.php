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
        Schema::create('adreses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pilseta_id');
            $table->unsignedBigInteger('iela_id');
            $table->foreign('pilseta_id')->references('id')->on('pilsetas');
            $table->foreign('iela_id')->references('id')->on('ielas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adreses');
    }
};
