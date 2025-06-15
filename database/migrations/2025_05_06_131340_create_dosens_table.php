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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nidn', 20)->unique(); // Diubah dari nip menjadi nidn
            $table->string('email', 100)->nullable();
            $table->string('foto', 255)->nullable();
            $table->string('gelar', 50)->nullable();
            $table->string('bidang_keahlian', 255)->nullable();
            $table->string('telepon', 20)->nullable();
            $table->string('alamat', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
