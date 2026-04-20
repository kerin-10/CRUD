
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kamar', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kamar')->unique();
            $table->enum('kategori', ['Standar', 'VIP', 'VVIP']);
            $table->decimal('harga_sewa', 12, 2);
            $table->text('fasilitas')->nullable();
            $table->enum('status', ['kosong', 'terisi'])->default('kosong');
            $table->timestamps();
        });

        Schema::create('penghunis', function (Blueprint $table) {
    $table->id();
    $table->string('nik', 20)->unique();
    $table->string('nama_lengkap');
    $table->integer('umur'); 
    $table->string('no_kamar'); 
    $table->enum('jenis_kelamin', ['L', 'P']);
    $table->text('alamat')->nullable();
    $table->string('no_hp', 20)->nullable();
    $table->string('email')->nullable(); 
    $table->date('tanggal_masuk')->nullable();
    $table->timestamps();
});

        Schema::create('data_sewa', function (Blueprint $table) {
            $table->id();

            $table->foreignId('kamar_id')
                ->constrained('kamar')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('penghuni_id')
                ->constrained('penghunis')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->date('tanggal_sewa');
            $table->date('tanggal_selesai')->nullable();
            $table->integer('lama_sewa_bulan');
            $table->decimal('total_bayar', 12, 2);
            $table->enum('status_pembayaran', ['lunas', 'belum_lunas'])->default('belum_lunas');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_sewa');
        Schema::dropIfExists('penghunis');
        Schema::dropIfExists('kamar');
    }
};