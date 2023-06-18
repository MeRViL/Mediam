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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nulable();// Наименование
            $table->string('slug')->nulable();// Значение
            $table->string('url');// Значение
            $table->string('mim_type')->nulable();// mim_type
            $table->text('description')->nulable();// Значение
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('entity_id')->nullable()->constrained('entities');// Компания
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
        Schema::dropIfExists('files');
    }
};
