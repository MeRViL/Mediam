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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('name');// Наименование
            $table->string('slug');// Значение
            $table->string('description');// Описание
            $table->longText('html');// html
            $table->enum('position', ['top', 'bottom']); // позиция
            $table->integer('priority')->default(0);
            $table->boolean('public')->default(false);// Опубликовано
            $table->schemalessAttributes('extra_attributes');
            $table->foreignId('post_id')->nullable()->constrained('posts');// ссылка на категорию
            $table->timestamps();
        });
        
        Schema::create('module_post', function (Blueprint $table) {
            $table->foreignId('post_id')->nullable()->constrained('posts');// ссылка на пост
            $table->foreignId('module_id')->nullable()->constrained('modules');// ссылка на модуль
           
        });
        
        Schema::table('posts', function (Blueprint $table) {
            $table->boolean('main')->default(false)->unique();// Главная
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
};
