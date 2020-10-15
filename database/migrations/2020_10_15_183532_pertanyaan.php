<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->id('id');
            $table->string('judul',45);
            $table->string('isi',255);
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbarui');
            $table->integer('jawaban_tepat_id');
            $table->integer('profil_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
