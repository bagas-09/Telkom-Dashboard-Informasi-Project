<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipeKemitraan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        {
            //
            Schema::create('tipe_kemitraan', function (Blueprint $table) {
                $table->id();
                $table->string('nama_tipe_kemitraan');
                $table->string('role');
                $table->foreign('role')->references('nama_role')->on('role');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('tipe_kemitraan');
    }
}
