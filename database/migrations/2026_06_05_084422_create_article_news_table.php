<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('article_news', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->longText('content');

            $table->string('thumbnail');

            $table->boolean('is_featured')
                ->default(false);

            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();

            $table->foreignId('author_id')
                ->constrained('authors')
                ->cascadeOnDelete();

            $table->string('slug')
                ->unique();

            $table->softDeletes();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('article_news');
    }
};