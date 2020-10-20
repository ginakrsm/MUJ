<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicalEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_equipment')->nullable();
            $table->integer('harga_jual')->nullable();
            $table->integer('harga_beli')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medical_equipments');
    }
}
