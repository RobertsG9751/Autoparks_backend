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
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('turetaja_id');
            $table->unsignedBigInteger("modelis_id");
            $table->string("VIN");
            $table->string("apstiprinajuma_nr");
            $table->unsignedBigInteger("krasa_id");
            $table->unsignedBigInteger("sedvietas");
            $table->unsignedBigInteger("tips_id");
            $table->string("piezimes");
            $table->foreign("turetaja_id")->references("id")->on("holders");
            $table->foreign("modelis_id")->references("id")->on("models");
            $table->foreign("krasa_id")->references("id")->on("krasas");
            $table->foreign("tips_id")->references("id")->on("types");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
};
