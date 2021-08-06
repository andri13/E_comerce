<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('id_barang',10)->unique();
            $table->string('barang',50);
            $table->string('id_kategori',10);
            $table->string('id_sup',10);
            $table->Integer('harga');
            $table->Integer('diskon');
            $table->Integer('stok');
            $table->Integer('harga_diskon');
            $table->string('deskripsi',100);
            $table->string('gambar',100);
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
        Schema::dropIfExists('barang');
    }
}
