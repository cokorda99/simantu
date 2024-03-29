<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masukans', function (Blueprint $table) {
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
        Schema::dropIfExists('masukans');
    }
}
