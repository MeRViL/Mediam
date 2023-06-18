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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string('name');// Наименование
            $table->string('value');// Значение
            $table->string('description');// Описание
            $table->foreignId('currency_id')->constrained('currencies');// Валюта
            $table->foreignId('bank_id')->constrained('banks');// Банк
            $table->foreignId('country_id')->nullable()->constrained('countries');// Человек
            // Компания
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
        Schema::dropIfExists('wallets');
    }
};
