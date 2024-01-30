<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_produk', function (Blueprint $table) {
            $table->id();
            $table->string('namaproduk');
            $table->unsignedBigInteger('kategoriID');
            $table->string('harga');
            $table->string('fotoproduk');
            $table->string('deskripsi');
            $table->timestamps();
            $table->foreign('kategoriID')->references('id')->on('table_kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_produk');
    }
}
