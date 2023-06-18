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
        Schema::create('banks', function (Blueprint $table) {
            // https://www.nbrb.by/api/bic
            $table->id();
            $table->string('typ');// "typ": "Банк",
            $table->string('CDBank');// "CDBank": "ABIGBY25",
            $table->string('CDHeadBank');// "CDHeadBank": "ABIGBY25",
            $table->string('NrBank');// "NrBank": "303",
            $table->string('BICStatus');// "BICStatus": "1",
            $table->string('NmBankShort');// "NmBankShort": "ОАО 'НЕБАНКОВСКАЯ КРЕДИТНО-ФИНАНСОВАЯ ОРГАНИЗАЦИЯ 'БЕЛИНКАСГРУПП'",
            $table->string('AdrBank');// "AdrBank": "Г.МИНСК",
            $table->string('CdControl')->nulable();// "CdControl": "ОТКР",
            $table->date('DtControl')->nulable();// "DtControl": "2018-04-19T00:00:00",
            $table->string('CdBankSuccessor')->nulable();// "CdBankSuccessor": null,
            $table->date('DTBegin');// "DTBegin": "2018-04-11T00:00:00",
            $table->date('DtEnd')->nulable();// "DtEnd": "2018-04-19T00:00:00"
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
        Schema::dropIfExists('banks');
    }
};
