<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('id_jadwal');  // id_jadwal sebagai auto-increment primary key
            $table->unsignedBigInteger('id_bus');  // id_bus sebagai foreign key
            $table->unsignedBigInteger('id_rute'); // id_rute sebagai foreign key
            $table->dateTime('waktu_berangkat');  // waktu berangkat
            $table->dateTime('waktu_tiba');  // waktu tiba
            $table->timestamps();  // untuk created_at dan updated_at

            // Menambahkan foreign key constraints
            $table->foreign('id_bus')->references('id_bus')->on('bus')->onDelete('cascade');
            $table->foreign('id_rute')->references('id_rute')->on('rute')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
