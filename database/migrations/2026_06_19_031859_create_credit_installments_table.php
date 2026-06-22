<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('credit_installments', function (Blueprint $table) {

            $table->id();

            $table->foreignId('credit_program_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->unsignedTinyInteger('dp_percent');

            $table->unsignedTinyInteger('tenor');

            $table->unsignedBigInteger('installment');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('credit_installments');
    }
};