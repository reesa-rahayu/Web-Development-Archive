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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomor')->unique();
            $table->string('nama');
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'kategori_surat'
            );
            $table->foreignId('pengajuan_id')->constrained(
                table: 'pengajuans',
                indexName: 'pengajuan_id'
            );
            $table->foreignId('pejabat_id')->constrained(
                table: 'pejabats',
                indexName: 'penandatangan'
            );
            $table->dateTime('tanggal_terbit');
            $table->dateTime('tanggal_kadaluarsa');
            $table->text('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
