<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->string('nama_menu')->nullable();
            $table->string('deskripsi_menu')->nullable();
            $table->integer('harga_menu')->default(0);
            $table->integer('stock_menu')->default(0);
            $table->enum('tipe_menu',['makanan','minuman']);
            $table->boolean('is_habis')->default(false);
            $table->string('image_menu')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
