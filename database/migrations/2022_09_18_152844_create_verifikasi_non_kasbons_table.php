<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifikasiNonKasbonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikasi_non_kasbons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('no_nonkasbon')->unique();
            $table->string('dokumen')->nullable();
            $table->float('nominal')->nullable();
            $table->float('total')->nullable();
            $table->unsignedBigInteger('id_verifikator')->nullable();

            $table->foreign('no_nonkasbon')->references('no_nonkasbon')->on('nonkasbons')->onDelete('cascade');
            $table->foreign('id_verifikator')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verifikasi_non_kasbons');
    }
}
