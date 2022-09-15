<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasbonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasbons', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tglmasuk')->nullable();
            $table->time('jammasuk')->nullable();
            $table->string('jeniskasbon')->nullable();
            $table->string('nip')->nullable();
            $table->string('username')->nullable();
            $table->unsignedBigInteger('id_unit')->nullable();
            $table->unsignedBigInteger('doksebelumnya')->nullable();
            $table->string('kodekasbon')->nullable();
            $table->unsignedBigInteger('id_jenis')->nullable();
            $table->unsignedBigInteger('id_kurs')->nullable();
            $table->string('proyek')->nullable();
            $table->text('uraianpengguna')->nullable();
            $table->timestamps();
            $table->integer('iddpp')->nullable();
            $table->integer('idppn')->nullable();
            $table->unsignedBigInteger('id_pph')->nullable();
            $table->integer('idpph')->nullable();
            $table->integer('total')->nullable();
            $table->string('namavendor')->nullable();
            $table->integer('haritempo')->nullable();
            $table->dateTime('tgltempo')->nullable();
            $table->string('noinvoice')->nullable();
            $table->string('spph')->nullable();
            $table->string('po_vendor')->nullable();
            $table->string('po_customer')->nullable();
            $table->string('sjn')->nullable();
            $table->integer('harga_jual')->nullable();
            $table->dateTime('barang_datang')->nullable();
            $table->string('nopi')->nullable();
            $table->string('formatkasbon')->nullable();

            $table->foreign('id_unit')->references('id')->on('units')->onDelete('cascade');
            $table->foreign('id_jenis')->references('id')->on('jenis')->onDelete('cascade');
            $table->foreign('id_kurs')->references('id')->on('kurs')->onDelete('cascade');
            $table->foreign('id_pph')->references('id')->on('pphs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasbons');
    }
}
