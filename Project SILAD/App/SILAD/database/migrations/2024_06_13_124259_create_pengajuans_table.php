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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('pemohon_id')->constrained(
                table: 'users',
                indexName: 'pemohon'
            );
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'kategori'
            );
            // $table->foreignId('peninjau_id')->constrained(
            //     table: 'admins',
            //     indexName: 'peninjau'
            // );
            $table->dateTime("waktu_pengajuan")->timestamps();
            $table->dateTime("waktu_konfirmasi");
            $table->integer("status")->default(0);
            $table->text("deskripsi");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
