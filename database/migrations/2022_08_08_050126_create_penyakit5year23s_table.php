<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyakit5year23sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyakit5year23s', function (Blueprint $table) {
            $table->id();
            $table->text('Kabupaten');
            $table->text('Penyakit');
            $table->text('Th2018');
            $table->text('Th2019');
            $table->text('Th2020');
            $table->text('Th2021');
            $table->text('Th2022');
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
        Schema::dropIfExists('penyakit5year23s');
    }
}
