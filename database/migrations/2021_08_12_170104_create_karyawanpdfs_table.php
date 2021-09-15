<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanpdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //buat tabel degan kolom
        Schema::create('karyawanpdfs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string(`nama`);
            $table->string(`alamat`);
            $table->string(`jabatan`);
            $table->string(`no telepon`);
            $table->string(`gaji`);
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
        Schema::dropIfExists('karyawanpdfs');
    }
}
