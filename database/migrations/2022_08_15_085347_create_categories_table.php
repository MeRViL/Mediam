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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');// Наименование
            $table->string('slug');// Значение
            $table->integer('position');// позиция
            $table->string('url')->nulable();// Значение
            $table->foreignId('smal_image_id')->nullable()->constrained('files');// Родительская категория
            $table->foreignId('big_image_id')->nullable()->constrained('files');// Родительская категория
            $table->text('description')->nulable();// Значение
            $table->text('key_words')->nulable();// Значение
            $table->boolean('public')->default(false);// Опубликовано
            $table->boolean('in_menu')->default(false);// Отображается в меню сайта
            $table->schemalessAttributes('extra_attributes');
            $table->timestamps();
        });
        
        Schema::table('categories', function (Blueprint $table) {
            $table->foreignId('parent_id')->nullable()->constrained('categories');// Родительская категория
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
