<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_ambulance')->nullable();
            $table->integer('id_customer')->nullable();
            $table->integer('id_bank_account')->nullable();
            $table->date('tanggal_transaksi')->nullable();
            $table->integer('total_bayar')->nullable();
            $table->string('bukti_pembayaran')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
