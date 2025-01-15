<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id('id_pesan'); // Auto-increment primary key
            $table->unsignedBigInteger('id_user'); // Foreign key ke user
            $table->unsignedBigInteger('id_jadwal'); // Foreign key ke jadwal
            $table->integer('nomor_kursi');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
