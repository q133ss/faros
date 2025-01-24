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
        Schema::create('smis', function (Blueprint $table) {
            $table->id();
            $table->string('list_title')->comment('Заголовок в общем списке');
            $table->string('post_title')->comment('Заголовок на деталке');
            $table->text('text');
            $table->string('source')->nullable()->comment('Ссылка на источник');
            $table->unsignedBigInteger('views')->default(0);
            $table->string('logo')->comment('лого сми')->nullable();
            $table->string('img')->comment('изображение поста');
            $table->enum('type', [
                'default',
                'gray_bg',
                'yellow_bg',
            ])->comment('обычный | серый фон | желтый фон')->default('default');
            $table->string('slug');
            // default - newsMiniBlock _bgWhite media__newsMiniBlock
            // gray_bg - articlesDoubleBlock _bgGray16 scene
            // yellow_bg - articlesDoubleBlock _bgYellow

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smis');
    }
};
