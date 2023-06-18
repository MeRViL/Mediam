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
        Schema::create('passports', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('place_id')->nullable()->constrained('places');
            $table->string('number');
            $table->string('personal_number')->nullable(); //личный номер;
            $table->string('issued_by');
            $table->string('start');
            $table->string('stop')->nullable();
            $table->foreignId('person_id')->nullable()->constrained('people');
            $table->foreignId('country_id')->constrained('countries');
            $table->foreignId('address_id')->constrained('addresses');
            $table->foreignId('owner_id')->nullable()->constrained('entities');
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
        Schema::dropIfExists('passports');
    }
};
