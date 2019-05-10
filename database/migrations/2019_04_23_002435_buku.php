<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Buku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul' , 50);
            $table->string('penerbit' , 50);
            $table->Integer('tahun_terbit');
            $table->string('pengarang' , 50);
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
        //
    }
}
