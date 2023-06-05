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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("kategori");
            $table->foreignId("author");
            $table->string('judul');
            $table->string('gambar_berita');
            $table->text('detail_berita');
            $table->text('berita');
            $table->integer('dilihat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
