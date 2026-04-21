<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penghuni', function (Blueprint $table) {
            $table->id();

            $table->string('nama_lengkap');
            $table->string('nik', 20);
            $table->integer('umur');

            $table->string('no_kamar');
            $table->string('no_hp', 15);
            $table->string('email')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penghuni');
    }
};