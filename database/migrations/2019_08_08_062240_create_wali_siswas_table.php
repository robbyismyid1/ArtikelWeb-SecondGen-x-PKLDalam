<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaliSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wali_siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('siswa_id');
            $table->string('wali_namaayah');
            $table->string('wali_pekerjaanayah');
            $table->string('wali_namaibu');
            $table->string('wali_pekerjaanibu');
            $table->text('wali_alamat');
            $table->integer('wali_telp')->unsigned();

            $table->foreign('siswa_id')->references('id')->on('siswas');
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
        Schema::dropIfExists('wali_siswas');
    }
}
