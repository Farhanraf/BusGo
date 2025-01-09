<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->id('id_bus');
            $table->string('nama_bus', 100);
            $table->integer('kapasitas');
            $table->string('plat_nomor', 50)->unique();
            $table->string('supir', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bus');
    }
};
