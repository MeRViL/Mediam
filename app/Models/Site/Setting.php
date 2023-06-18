<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // $table->string('name')->nulable();// Наименование
        'color1', // $table->string('color1')->nulable();// Цвет 1
        'color2', // $table->string('color2')->nulable();// Цвет 2
        'keywords', // $table->text('keywords');// Ключевые слова
        'desc', // $table->text('desc');// Описание сайта
        'favicon_id', // $table->foreignId('favicon_id')->nullable()->constrained('files');// Иконка сайта
        'address', // $table->string('address');// Адрес организации
        'entity_name', // $table->string('entity_name');// наименование организации
        'unp', // $table->string('unp');// УНП
        'phones', // $table->string('phones');// телефоны
        'email', // $table->string('email');// электронный адрес организации
        'work_time', // $table->json('work_time');// График работы
        'social', // $table->json('social');// соц сети
        'logo_id', // $table->foreignId('logo_id')->nullable()->constrained('files');// Логотип
        'google_api', // $table->string('google_api');// google_api
        'yandex_api', // $table->string('yandex_api');// yandex_api
        'recapcha_public', // $table->string('recapcha_public');// recapcha_public
        'recapcha_private', // $table->string('recapcha_private');// recapcha_private
    ];

    public function favicon()
    {
        return $this->belongsTo(File::class, 'favicon_id');
    }

    public function logo()
    {
        return $this->belongsTo(File::class, 'logo_id');
    }
}
