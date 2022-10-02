<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDvendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvendors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nokasbon')->unique()->nullable();
            $table->string('dv_invoice')->nullable();
            $table->string('dv_kwitansi')->nullable();
            $table->string('dv_povendor')->nullable();
            $table->string('dv_sjnvendor')->nullable();
            $table->string('dv_packcinglist')->nullable();
            $table->string('dv_testreport')->nullable();
            $table->string('dv_bapp')->nullable();
            $table->string('dv_lppb')->nullable();

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
        Schema::dropIfExists('dvendors');
    }
}
