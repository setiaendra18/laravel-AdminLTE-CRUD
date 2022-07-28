<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->foreign(['id_kategori'], 'FK_produk_kategori')->references(['id'])->on('kategori')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->dropForeign('FK_produk_kategori');
        });
    }
}
