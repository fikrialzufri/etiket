<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('slug');
            $table->string('kode');
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_selesai');
            $table->string('diskripsi')->nullable();
            $table->string('content')->nullable();
            $table->integer('jumlah_min')->default(0);
            $table->integer('jumlah_max')->default(0);
            $table->integer('status')->default(0);
            $table->string('kota_id')->references('id')->on('kota');
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
        Schema::dropIfExists('event');
    }
}
