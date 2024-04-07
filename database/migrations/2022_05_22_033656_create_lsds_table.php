<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLsdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lsds', function (Blueprint $table) {
            $table->id();
            $table->text('Bulan');
            $table->text('Target');
            $table->text('Realisasi');
            $table->text('Tahun');
            $table->text('updateAll');
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
        Schema::dropIfExists('lsds');
    }
}
