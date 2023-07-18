<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained('users');
            $table->foreignId('coach_id')->constrained('coaches');
            $table->foreignId('paket_id')->constrained('pakets');
            $table->date('jadwal_mulai');
            $table->date('jadwal_selesai');
            $table->integer('pembayaran');
            $table->string('bukti')->nullable();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
