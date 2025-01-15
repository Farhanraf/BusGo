<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_bayar'); // Auto-increment primary key
            $table->unsignedBigInteger('id_pesan'); // Foreign key ke pemesanan
            $table->integer('jumlah_kursi');
            $table->dateTime('tanggal_pembayaran');
            $table->timestamp('dibuat_pada')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_pesan')->references('id_pesan')->on('pemesanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
