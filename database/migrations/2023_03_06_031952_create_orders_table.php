<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('product_id');
            $table->integer('guest_id')->nullable();
            $table->float('quantity');
            $table->float('total_price');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('product_id')->references('id')->on('products');
            // $table->foreign('guest_id')->references('id')->on('guests');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
