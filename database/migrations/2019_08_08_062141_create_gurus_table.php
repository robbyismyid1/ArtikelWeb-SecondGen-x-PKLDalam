<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kompetensi_id');
            $table->string('guru_nip')->unique();
            $table->string('guru_nama');
            $table->text('guru_alamat');
            $table->integer('guru_telp')->unsigned();

            $table->foreign('kompetensi_id')->references('id')->on('kompetensi_keahlians');
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
        Schema::dropIfExists('gurus');
    }
}
