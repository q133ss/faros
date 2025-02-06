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
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('name');
            $table->string('list_post')->comment('Должность на странице списка');
            $table->string('page_post')->comment('Должность на детальной странице')->nullable();
            $table->text('list_text')->nullable();
            $table->integer('rating')->default(0);
            $table->string('post_count')->comment('Кол-во статей')->nullable();
            $table->string('smi_count')->comment('Кол-во постов сми')->nullable();
            $table->text('from_author')->comment('Слова от автора')->nullable();
            $table->text('education')->comment('Образование')->nullable();
            $table->text('additional_educational')->comment('Доп Образование')->nullable();
            $table->string('email')->nullable();
            $table->string('instagram')->nullable();
            $table->boolean('has_detail')->default(true)->comment('Есть-ли детальная страница');
            $table->string('slug');
            $table->boolean('list_show')->default(true)->comment('Показывать на странице команда?');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
