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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('fio'); //Имя;
            $table->string('name')->nullable(); //Имя;
            $table->string('surname')->nullable(); //Фамилия;
            $table->string('patronymic')->nullable(); //Отчество;
            $table->date('birthday')->nullable(); //день рождения;
            $table->foreignId('user_id')->nullable()->constrained('users');
            //$table->foreignId('owner_id')->nullable()->constrained('entities');
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
        Schema::dropIfExists('people');
    }
};
