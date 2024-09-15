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
        Schema::create('transactions', function (Blueprint $table) {
            $table->char('transaction-id', length: 12)->nullable(false);
            $table->char('user-id-fk', length: 10)->nullable(false);
            $table->char('plant-id-fk', length: 10)->nullable(false);
            $table->dateTime('transaction-date')->nullable(false);
            $table->unique('transaction-id');
            $table->primary('transaction-id');
            $table->foreign('user-id-fk')->references('user-id')->on('users');
            $table->foreign('plant-id-fk')->references('plant-id')->on('plants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};