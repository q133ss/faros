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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('list_name');
            $table->foreignId('author_id')->nullable();
            $table->string('post_name');
            $table->text('pre_title')->nullable()->comment('Предзаголовок');
            $table->json('content_list')->nullable()->comment('Содержание статьи, уже не используется!');
            $table->text('content')->nullable()->comment('Контент');
            $table->unsignedBigInteger('views')->default(0);
            $table->string('list_img');
            $table->string('img')->nullable();
            $table->foreignId('category_id')->nullable()->constrained('article_categories')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
