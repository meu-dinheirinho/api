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
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();
            $table->integer('id_wallet');
            $table->string('alias');
            $table->decimal('limit_value', 5,2);
            $table->string('last_four_digits');
            $table->date('closing_date');
            $table->date('invoice_date');
            $table->enum('favorite', [1, 0]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_cards');
    }
};
