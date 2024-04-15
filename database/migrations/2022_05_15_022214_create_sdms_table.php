<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdms', function (Blueprint $table) {
            $table->id();
            $table->text('Nama');
            $table->text('Nip');
            $table->text('Jenis');
            $table->text('Sebaran');
            $table->text('Pendidikan');
            $table->text('Jabatan');
            $table->text('Fungsional');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sdms');
    }
}
