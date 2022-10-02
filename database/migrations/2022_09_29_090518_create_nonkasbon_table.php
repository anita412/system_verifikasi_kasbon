<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonkasbonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonkasbon', function (Blueprint $table) {
            $table->id();
            $table->date('tglmasuk')->nullable();
            $table->time('jammasuk')->nullable();
            $table->string('doksebelumnya')->nullable();
            $table->string('user')->nullable();
            $table->string('unit')->nullable();
            $table->string('kodekasbon')->nullable();
            $table->string('jenis_nonkasbon')->nullable();
            $table->string('kurs')->nullable();
            $table->string('namavendor')->nullable();
            $table->string('noinvoice')->nullable();
            $table->string('tujuanpembayaran')->nullable();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_unit')->references('id')->on('units')->onDelete('cascade');
            // $table->foreign('id_kodekasbon')->references('id')->on('kasbons')->onDelete('cascade');
            // $table->foreign('nokasbon')->references('nokasbon')->on('kasbons')->onDelete('cascade');
        });
        // Schema::create('nonkasbon', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nonkasbon');
    }
}
