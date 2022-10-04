<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifikasiKasbonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikasi_kasbons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kasbon')->nullable();
            $table->string('status')->nullable();
            $table->string('vkb_a_1')->nullable();
            $table->unsignedBigInteger('id_vkb_a_1')->nullable();
            $table->string('vkb')->nullable();
            $table->unsignedBigInteger('id_vkb')->nullable();
            $table->string('vkb_a_2')->nullable();
            $table->unsignedBigInteger('id_vkb_a_2')->nullable();
            $table->timestamps();

            $table->foreign('id_kasbon')->references('id')->on('kasbons')->onDelete('cascade');
            $table->foreign('id_vkb')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_vkb_a_1')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_vkb_a_2')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verifikasi_kasbons');
    }
}
