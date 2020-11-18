<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKerjaPrakteksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerja_prakteks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->string('npm')->nullable();
            $table->string('judul_kp')->nullable();
            $table->string('tempat_kp')->nullable();
            $table->string('nrk')->nullable();
            $table->string('pembimbing_lapangan')->nullable();
            $table->string('awal_bimbingan')->nullable();
            $table->string('akhir_bimbingan')->nullable();
            $table->string('dokumen_persyaratan')->nullable();
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
        Schema::dropIfExists('kerja_prakteks');
    }
}
