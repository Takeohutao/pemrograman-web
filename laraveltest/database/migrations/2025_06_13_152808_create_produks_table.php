<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id(); // ID otomatis (primary key)
            $table->string('id_produk')->unique(); // ID Produk manual (kode unik)
            $table->unsignedBigInteger('id_kategori'); // relasi ke kategori
            $table->string('nama_produk');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 10, 2);
            $table->integer('stock');
            $table->timestamps();

            // Foreign key (opsional, jika ada tabel kategori)
            // $table->foreign('id_kategori')->references('id')->on('kategoris');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
