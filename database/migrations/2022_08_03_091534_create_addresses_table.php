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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('postal_code'); // postal_code	6	Индекс
            $table->foreignId('country_id')->constrained('countries');// country	120	Страна
            $table->string('region_with_type')->nulable();// region_with_type	131	Регион с типом
            $table->string('region_type')->nulable();// region_type	10	Тип региона (сокращенный)
            $table->string('region_type_full')->nulable();// region_type_full	50	Тип региона
            $table->string('region')->nulable();// region	120	Регион
            $table->string('area_with_type')->nulable();// area_with_type	131	Район в регионе с типом
            $table->string('area_type')->nulable();// area_type	10	Тип района в регионе (сокращенный)
            $table->string('area_type_full')->nulable();// area_type_full	50	Тип района в регионе
            $table->string('area')->nulable();// area	120	Район в регионе
            $table->string('city_with_type')->nulable();// city_with_type	131	Город с типом
            $table->string('city_type')->nulable();// city_type	10	Тип города (сокращенный)
            $table->string('city_type_full')->nulable();// city_type_full	50	Тип города
            $table->string('city')->nulable();// city	120	Город
            $table->string('city_district_with_type')->nulable();// city_district_with_type	131	Район города с типом
            $table->string('city_district_type')->nulable();// city_district_type	10	Тип района города (сокращенный)
            $table->string('city_district_type_full')->nulable();// city_district_type_full	50	Тип района города
            $table->string('city_district')->nulable();// city_district	120	Район города
            $table->string('settlement_with_type')->nulable();// settlement_with_type	131	Населенный пункт с типом
            $table->string('settlement_type')->nulable();// settlement_type	10	Тип населенного пункта (сокращенный)
            $table->string('settlement_type_full')->nulable();// settlement_type_full	50	Тип населенного пункта
            $table->string('settlement')->nulable();// settlement	120	Населенный пункт
            $table->string('street_with_type')->nulable();// street_with_type	131	Улица с типом
            $table->string('street_type')->nulable();// street_type	10	Тип улицы (сокращенный)
            $table->string('street_type_full')->nulable();// street_type_full	50	Тип улицы
            $table->string('street')->nulable();// street	120	Улица
            $table->string('house_type')->nulable();// house_type	10	Тип дома (сокращенный)
            $table->string('house_type_full')->nulable();// house_type_full	50	Тип дома
            $table->string('house')->nulable();// house	50	Дом
            $table->string('block_type')->nulable();// block_type	10	Тип корпуса/строения (сокращенный)
            $table->string('block_type_full')->nulable();// block_type_full	50	Тип корпуса/строения
            $table->string('block')->nulable();// block	50	Корпус/строение
            $table->string('entrance')->nulable();// entrance	10	Подъезд
            $table->string('floor')->nulable();// floor	10	Этаж
            $table->string('flat_type')->nulable();// flat_type	10	Тип квартиры (сокращенный)
            $table->string('flat_type_full')->nulable();// flat_type_full	50	Тип квартиры
            $table->string('flat')->nulable();// flat	50	Квартира
            $table->string('postal_box')->nulable();// postal_box	50	Абонентский ящик
            $table->timestamps();
        });
        
        Schema::table('addresses', function (Blueprint $table) {
            $table->foreignId('parent_id')->nullable()->constrained('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
