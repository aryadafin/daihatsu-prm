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
    Schema::table('cars', function (Blueprint $table) {

        $table->foreignId('car_category_id')
              ->nullable()
              ->constrained()
              ->nullOnDelete();

        $table->string('name');

        $table->string('slug')->unique();

        $table->bigInteger('price')->nullable();

        $table->string('thumbnail')->nullable();

        $table->longText('description')->nullable();

        $table->longText('specification')->nullable();

        $table->string('engine')->nullable();

        $table->string('fuel_type')->nullable();

        $table->string('transmission')->nullable();

        $table->integer('seat_capacity')->nullable();

        $table->boolean('is_featured')->default(false);

        $table->boolean('is_active')->default(true);

        $table->string('meta_title')->nullable();

        $table->text('meta_description')->nullable();

        $table->softDeletes();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            //
        });
    }
};
