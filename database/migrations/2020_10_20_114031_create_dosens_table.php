<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->string('nrk')->nullable();
            $table->string('nama_dosen')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('nama_sekolah')->nullable();
            $table->string('tahun_lulus')->nullable();
            $table->string('nama_jabatan')->nullable();
            $table->string('nama_organisasi')->nullable();
            $table->string('nama_pendidikan')->nullable();
            $table->string('nama_kantor')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('dosens');
    }
}
