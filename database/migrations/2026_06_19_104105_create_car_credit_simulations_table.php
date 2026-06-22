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
        Schema::create('car_credit_simulations', function (Blueprint $table) {
           $table->id();

$table->foreignId('car_id')
    ->constrained()
    ->cascadeOnDelete();

$table->string('name');

$table->unsignedBigInteger('otr_price');

$table->boolean('is_active')
    ->default(true);

$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_credit_simulations');
    }
};
