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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('subtitle')->nullable()->comment('Подзаголовок. Краткое описание');
            $table->string('short_description')->nullable()->comment('Краткое описание на детальной странице');
            $table->string('bg_color')->default('#e94a47')->comment('Цвет фона на детальной странице');
            $table->string('img')->nullable();

            $table->string('section_one_percent')->nullable()->comment('Процент/Заголовок в первой секции');
            $table->string('section_one_percent_description')->nullable()->comment('Описание процента в секции 1');
            $table->string('section_one_title')->nullable();
            $table->text('section_one_text')->nullable();

            $table->json('advantages')->nullable()->comment('Преимущества. Иконка + текст');

            $table->string('section_two_percent')->nullable()->comment('Процент/Заголовок во второй секции');
            $table->string('section_two_percent_description')->nullable()->comment('Описание процента в секции 2');
            $table->string('section_two_title')->nullable();
            $table->text('section_two_text')->nullable();

            $table->json('how_it_works')->nullable()->comment('Иконка + текст');
            $table->json('why_choose_us')->nullable()->comment('Иконка + заголовок + текст');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
