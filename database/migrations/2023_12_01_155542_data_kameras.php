<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataKameras extends Migration
{
    public function up()
    {
        Schema::create('data_kameras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kamera');
            $table->text('kelengkapan');
            $table->decimal('harga_kamera', 10, 3);
            $table->string('gambar_kamera'); // Ubah tipe kolom menjadi string
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->boolean('status_ketersediaan')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_kameras');
    }
}

