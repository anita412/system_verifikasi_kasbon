<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDPajaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_pajaks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nokasbon')->unique()->nullable();
            $table->string('dp_kesesuaianfaktur')->nullable();
            $table->string('dp_pajakpenghasilan')->nullable();
            $table->string('dp_suratnonpkp')->nullable();

            $table->foreign('nokasbon')->references('nokasbon')->on('kasbons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_pajaks');
    }
}
