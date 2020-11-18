<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->string('kd_prodi')->nullable();
            $table->string('kelas_reguler')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('npm')->nullable();
            $table->string('nama')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kota_asal')->nullable();
            $table->string('handphone')->nullable();
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
        Schema::dropIfExists('mahasiswas');
    }
}
