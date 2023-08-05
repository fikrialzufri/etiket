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
            $table->string('nama');
            $table->string('no_hp');
            $table->string('email');
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('status')->default(0);
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