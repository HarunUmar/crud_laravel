<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('barang', function (Blueprint $table) {
            $table->string('id_barang')->primary();
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->date('tanggal_masuk');
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

        //
    }
}
