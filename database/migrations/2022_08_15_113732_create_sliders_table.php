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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('name');// Наименование
            $table->string('slug');// Значение
            $table->string('url')->nulable();// Значение
            $table->string('align')->nulable();// выравнивание текста
            $table->foreignId('image_id')->nullable()->constrained('files');// Родительская категория
            $table->text('description')->nulable();// Значение
            $table->text('action')->nulable();// Значение
            $table->boolean('public')->default(false);// Опубликовано
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
        Schema::dropIfExists('sliders');
    }
};
