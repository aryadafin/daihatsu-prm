<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('article_news', function (Blueprint $table) {
            $table->boolean('is_featured')
                ->default(false)
                ->change();
        });
    }

    public function down(): void
    {
        Schema::table('article_news', function (Blueprint $table) {
            $table->enum('is_featured', ['0', '1'])
                ->default('0')
                ->change();
        });
    }
};