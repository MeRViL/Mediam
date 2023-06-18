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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('code');// "code": "834",
            $table->string('alfa2');// "alfa2": "TZ",
            $table->string('alfa3');// "alfa3": "TZA",
            $table->string('name_short');// "name_short": "Танзания",
            $table->string('name');// "name": "Объединенная Республика Танзания"
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
        Schema::dropIfExists('countries');
    }
};
