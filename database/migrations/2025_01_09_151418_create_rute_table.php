<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rute', function (Blueprint $table) {
            $table->id('id_rute'); // Auto increment primary key
            $table->string('kota_awal', 100); // VARCHAR(100) NOT NULL
            $table->string('kota_tujuan', 100); // VARCHAR(100) NOT NULL
            $table->float('jarak'); // FLOAT NOT NULL
            $table->decimal('harga', 10, 2); // DECIMAL(10, 2) NOT NULL
            $table->timestamps(); // Optional: created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rute');
    }
}
