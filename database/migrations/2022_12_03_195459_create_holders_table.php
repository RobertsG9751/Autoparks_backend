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
        Schema::create('holders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adrese_id');
            $table->string("registracijas_nr");
            $table->string("apliecibas_nr");
            $table->foreign('adrese_id')->references('id')->on('adreses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holders');
    }
};
