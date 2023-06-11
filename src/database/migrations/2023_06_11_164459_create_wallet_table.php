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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_type_wallet');
            $table->integer('institution_number');
            $table->string('name');
            $table->text('description');
            $table->decimal('current_value',5, 2);
            $table->enum('favorite', [1, 0]);
            $table->enum('ignore_on_final_value', [1, 0]);
            $table->string('color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet');
    }
};
