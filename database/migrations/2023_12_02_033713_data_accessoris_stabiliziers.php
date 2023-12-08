<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataAccessorisStabiliziers extends Migration
{
    public function up()
    {
        Schema::create('data_accessoris_stabiliziers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('accessoris_stabilizier');
            $table->decimal('harga', 10, 3);
            $table->string('gambar'); 
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->boolean('status_ketersediaan')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_accessoris_stabiliziers');
    }
}

