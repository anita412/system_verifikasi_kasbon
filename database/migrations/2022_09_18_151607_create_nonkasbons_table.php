<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonkasbonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonkasbons', function (Blueprint $table) {
            $table->id();
            $table->string('no_nonkasbon')->unique();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->date('tglmasuk')->nullable();
            $table->time('jammasuk')->nullable();
            $table->string('doksebelumnya')->nullable();
            $table->unsignedBigInteger('id_unit')->nullable();
            $table->string('kodekasbon')->nullable();
            $table->string('jenis')->nullable();
            $table->unsignedBigInteger('kurs')->nullable();
            $table->string('namavendor')->nullable();
            $table->string('noinvoice')->nullable();
            $table->string('tujuanpembayaran')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_unit')->references('id')->on('units')->onDelete('cascade');
            // $table->foreign('id_kodekasbon')->references('id')->on('kode_kasbons')->onDelete('cascade');
            $table->foreign('kurs')->references('id')->on('kurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nonkasbons');
    }
}
