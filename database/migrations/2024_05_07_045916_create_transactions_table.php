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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('barang_lelang_id')->constrained()->onDelete('cascade');
            $table->string('order_id')->unique();
            $table->double('amount', 10, 2);
            $table->string('status')->default('pending'); // Status bisa pending, success, failed, dll.
            $table->text('payment_url')->nullable(); // URL untuk pembayaran Midtrans
            $table->json('payment_details')->nullable(); // Detail lebih lanjut yang dikirimkan oleh Midtrans
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
        Schema::dropIfExists('transactions');
    }
};
