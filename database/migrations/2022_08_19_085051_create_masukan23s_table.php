<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasukan23sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masukan23s', function (Blueprint $table) {
            $table->id();
            $table->text('Tanggal');
            $table->text('Bulan');
            $table->text('Tahun');
            $table->text('Judul');
            $table->text('Isi_Masukan');
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
        Schema::dropIfExists('masukan23s');
    }
}
