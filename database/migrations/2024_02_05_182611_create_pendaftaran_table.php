<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ttl');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('status');
            $table->string('no_telp');
            $table->text('alamat');
            $table->text('riwayat_pendidikan');
            $table->text('pengalaman_kerja')->nullable();
            $table->text('sertifikasi')->nullable();
            $table->text('pengalaman_organisasi')->nullable();
            $table->text('soft_skill')->nullable();
            $table->text('hard_skill')->nullable();
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
        Schema::dropIfExists('pendaftaran');
    }
}
