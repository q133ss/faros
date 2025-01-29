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
        Schema::create('client_cases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order');
            $table->string('slug')->unique();
            $table->string('list_name')->comment('Название в списке');
            $table->string('post_name')->comment('Название в деталке');
            $table->string('logo')->nullable();
            $table->string('list_img')->nullable()->comment('Изображение в списке');
            $table->string('img')->nullable()->comment('Изображение в деталке');
            $table->string('bg_color')->default('#104076');
            $table->string('text_color')->default('#b9b9b9');
            $table->mediumText('text');
            $table->unsignedBigInteger('views')->default(0);
            $table->enum('type', ['default', 'bgYellow', 'double'])->comment('Обычный')->default('default');
            // default = miniBlock _bgDarkBlue scene
            // bgYellow = projBlock _bgYellow
            // double = miniBlock _bgDarkBlue scene miniBlock_double
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_cases');
    }
};
