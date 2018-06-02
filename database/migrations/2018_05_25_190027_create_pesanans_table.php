<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_menu');
            $table->boolean('is_selesai')->default(false);
            $table->boolean('is_batal')->default(false);
            $table->boolean('is_notif')->default(false);
            
            $table->integer('jumlah_pesanan')->default(1);
            $table->enum('metode_pemesanan',[
                'antar','ambil'
            ])->default('ambil');
            $table->string('nama_pemesan')->nullable();
            $table->string('kontak')->nullable();
            $table->string('alamat')->nullable();

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
        Schema::dropIfExists('pesanans');
    }
}
