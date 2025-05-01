<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kode')->nullable();
            $table->string('nama')->nullable();;
            $table->string('slug')->nullable();;
            $table->string('no_hp')->nullable();;
            $table->string('email')->nullable();;
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('status')->default(0);
            $table->string('bidang_id')->nullable()->references('id')->on('bidang');
            $table->string('paslon_id')->nullable()->references('id')->on('paslon');
            $table->string('jabatan_id')->nullable()->references('id')->on('jabatan');
            $table->enum('hadir', ['Hadir', 'Tidak Hadir'])->default('Hadir');
            $table->text('catatan')->nullable();
            $table->softDeletes();

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
        Schema::dropIfExists('peserta');
    }
}
