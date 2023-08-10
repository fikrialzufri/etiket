<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrance', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->dateTime('tanggal_masuk')->nullable();
            $table->dateTime('tanggal_keluar')->nullable();
            $table->string('peserta_id')->references('id')->on('peserta');
            $table->string('event_id')->references('id')->on('event');
            $table->string('kota_id')->references('id')->on('kota');
             $table->string('bidang_id')->references('id')->on('bidang');
            $table->string('jabatan_id')->references('id')->on('jabatan');

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
        Schema::dropIfExists('entrance');
    }
}
