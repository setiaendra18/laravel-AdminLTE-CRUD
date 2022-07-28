<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama_produk', 50)->default('0');
            $table->text('keterangan');
            $table->date('tanggal')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('id_kategori')->default(0)->index('FK_produk_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
