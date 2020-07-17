<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribusis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('landasan_permintaan');
            $table->foreignId('id_penerima')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tempat_penerima');
            $table->foreignId('id_barang')->constrained('barangs')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jumlah');
            $table->string('prioritas');
            $table->integer('id_admin')->nullable();
            $table->integer('id_kepala')->nullable();
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
        Schema::dropIfExists('distribusis');
    }
}
