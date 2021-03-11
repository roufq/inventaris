<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvetarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invetaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->string('jumlah');
            $table->string('jenis_id');
            $table->string('tanggal_register');
            $table->string('ruang_id');
            $table->string('kode_invetaris');
            $table->string('petugas_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invetaris');
    }
}
