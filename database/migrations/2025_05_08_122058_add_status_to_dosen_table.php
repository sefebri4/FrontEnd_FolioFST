<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToDosenTable extends Migration
{
    public function up()
    {
        Schema::table('dosen', function (Blueprint $table) {
            $table->enum('status', ['dosen', 'kaprodi', 'dekan'])
                ->default('dosen')
                ->after('alamat');
        });
    }


    public function down()
    {
        Schema::table('dosen', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
