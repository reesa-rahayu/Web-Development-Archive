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
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("pertanyaan");
            $table->foreignId('pengirim_id')->constrained(
                table: 'users',
                indexName: 'pengirim'
            );
            $table->text("jawaban")->nullable();
            $table->boolean("isFAQ")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertanyaans');
    }
};
