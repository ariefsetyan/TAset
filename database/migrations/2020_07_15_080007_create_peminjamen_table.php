<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('id_karyawan');
//            $table->unsignedBigInteger('id_barang')->nullable();
            $table->dateTime('tanggal_peinjam');
            $table->string('tujuan_pinjam');
            $table->date('estimasi_waktu');
            $table->string('diskripsi_barang');
            $table->integer('id_admin')->nullable();
            $table->timestamps();
            $table->foreignId('id_karyawan')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_barang')->constrained('barangs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamen');
    }
}
