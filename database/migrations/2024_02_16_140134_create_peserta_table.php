<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {
    Schema::create('peserta', function (Blueprint $table) {
        $table->id();
        $table->string('paket_id')->nullable();
        $table->string('nama');
        $table->integer('umur');
        $table->string('alamat');
        $table->string('sekolah');
        $table->string('jenis_kelamin');
        $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};
