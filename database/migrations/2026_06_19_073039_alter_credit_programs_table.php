<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('credit_programs', function (Blueprint $table) {

            $table->dropForeign(['car_id']);
            $table->dropColumn('car_id');

            $table->foreignId('credit_car_id')
                ->after('id')
                ->constrained()
                ->cascadeOnDelete();

        });
    }

    public function down(): void
    {
    }
};