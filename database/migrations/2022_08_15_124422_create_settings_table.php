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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nulable();// Наименование
            $table->string('color1')->nulable();// Цвет 1
            $table->string('color2')->nulable();// Цвет 2
            $table->text('keywords');// Ключевые слова
            $table->text('desc');// Описание сайта
            $table->foreignId('favicon_id')->nullable()->constrained('files');// Иконка сайта
            $table->string('address');// Адрес организации
            $table->string('entity_name');// наименование организации
            $table->string('unp');// УНП
            $table->string('phones');// телефоны
            $table->string('email');// электронный адрес организации
            $table->text('work_time');// График работы
            $table->text('social');// соц сети
            $table->foreignId('logo_id')->nullable()->constrained('files');// Логотип
            $table->string('google_api');// google_api
            $table->string('yandex_api');// yandex_api
            $table->string('recapcha_public');// recapcha_public
            $table->string('recapcha_private');// recapcha_private
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
        Schema::dropIfExists('settings');
    }
};
