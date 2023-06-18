<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');// Наименование
            $table->string('slug');// Значение
            $table->foreignId('image_id')->nullable()->constrained('files');// ссылка на картинку
            $table->foreignId('audio_id')->nullable()->constrained('files');// ссылка на аудио
            $table->foreignId('category_id')->nullable()->constrained('categories');// ссылка на категорию
            $table->text('description')->nullable();// Описание
            $table->text('short_description')->nullable();// Описание
            $table->integer('views')->default(0);// Просмотры
            $table->boolean('public')->default(false);// Опубликовано
            $table->string('price')->nullable();// цена
            $table->string('old_price')->nullable();// старая цена
            $table->schemalessAttributes('extra_attributes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
