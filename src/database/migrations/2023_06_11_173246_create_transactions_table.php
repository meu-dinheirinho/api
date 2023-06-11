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
            $table->id();
            $table->integer('id_wallet');
            $table->integer('id_type_transaction');
            $table->integer('id_category');
            $table->integer('id_recurrence');
            $table->string('name');
            $table->decimal('value', 5,2);
            $table->enum('automatic_payment', [1, 0]);
            $table->text('observations');
            $table->timestamps();
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
