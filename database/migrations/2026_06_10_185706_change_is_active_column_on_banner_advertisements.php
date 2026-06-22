<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('banner_advertisements', function (Blueprint $table) {
            $table->boolean('is_active')->default(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('banner_advertisements', function (Blueprint $table) {
            $table->enum('is_active', ['0', '1'])->default('0')->change();
        });
    }
};