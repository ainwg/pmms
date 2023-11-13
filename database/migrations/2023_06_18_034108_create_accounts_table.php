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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->datetime('account_open_datetime')->nullable();
            $table->decimal('account_open_amount',10,2)->nullable();
            $table->datetime('account_close_datetime')->nullable();
            $table->decimal('account_close_amount',10,2)->nullable();
            $table->date('sales_date')->nullable();
            $table->decimal('sales_amount',10,2)->nullable();
            $table->date('expense_date')->nullable();
            $table->string('expense_name')->nullable();
            $table->decimal('expense_amount',10,2)->nullable();


            // Disable timestamps
            $table->timestamps(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
