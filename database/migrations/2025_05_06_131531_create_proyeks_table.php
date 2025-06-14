<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->text('deskripsi')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->enum('status', ['Berjalan', 'Selesai', 'Tertunda'])->nullable();
            $table->string('foto', 255)->nullable();
            $table->string('nim', 20)->nullable();
            $table->string('nidn', 20)->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('set null');
            $table->foreign('nidn')->references('nidn')->on('dosen')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyek');
    }
};
