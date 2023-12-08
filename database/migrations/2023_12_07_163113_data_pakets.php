<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataPakets extends Migration
{
    public function up()
    {
        Schema::create('data_pakets', function (Blueprint $table) {
            $table->bigIncrements('id_paket');
            $table->string('Kelengkapan');
            $table->string('gambar'); 
            $table->boolean('status_ketersediaan')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_pakets');
    }
}


