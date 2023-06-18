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
        Schema::create('currencies', function (Blueprint $table) {
            // https://www.nbrb.by/api/exrates/currencies
            $table->id();
            $table->string('Cur_ID');// "Cur_ID": 1,
            $table->string('Cur_ParentID');// "Cur_ParentID": 1,
            $table->string('Cur_Code');// "Cur_Code": "008",
            $table->string('Cur_Abbreviation');// "Cur_Abbreviation": "ALL",
            $table->string('Cur_Name');// "Cur_Name": "Албанский лек",
            $table->string('Cur_Name_Bel');// "Cur_Name_Bel": "Албанскі лек",
            $table->string('Cur_Name_Eng');// "Cur_Name_Eng": "Albanian Lek",
            $table->string('Cur_QuotName');// "Cur_QuotName": "1 Албанский лек",
            $table->string('Cur_QuotName_Bel');// "Cur_QuotName_Bel": "1 Албанскі лек",
            $table->string('Cur_QuotName_Eng');// "Cur_QuotName_Eng": "1 Albanian Lek",
            $table->string('Cur_NameMulti');// "Cur_NameMulti": "",
            $table->string('Cur_Name_BelMulti');// "Cur_Name_BelMulti": "",
            $table->string('Cur_Name_EngMulti');// "Cur_Name_EngMulti": "",
            $table->string('Cur_Scale');// "Cur_Scale": 1,
            $table->string('Cur_Periodicity');// "Cur_Periodicity": 1,
            $table->date('Cur_DateStart');// "Cur_DateStart": "1991-01-01T00:00:00",
            $table->date('Cur_DateEnd');// "Cur_DateEnd": "2007-11-30T00:00:00"
            $table->foreignId('country_id')->constrained('countries');// "country": "Беларусь"
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
        Schema::dropIfExists('currencies');
    }
};
