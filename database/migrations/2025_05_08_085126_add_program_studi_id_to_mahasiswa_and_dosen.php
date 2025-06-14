<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProgramStudiIdToMahasiswaAndDosen extends Migration
{
    public function up()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->unsignedBigInteger('program_studi_id')->nullable()->after('id');
            $table->foreign('program_studi_id')->references('id')->on('program_studi')->onDelete('set null');
        });

        Schema::table('dosen', function (Blueprint $table) {
            $table->unsignedBigInteger('program_studi_id')->nullable()->after('id');
            $table->foreign('program_studi_id')->references('id')->on('program_studi')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropForeign(['program_studi_id']);
            $table->dropColumn('program_studi_id');
        });

        Schema::table('dosen', function (Blueprint $table) {
            $table->dropForeign(['program_studi_id']);
            $table->dropColumn('program_studi_id');
        });
    }
}
