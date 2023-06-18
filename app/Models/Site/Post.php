<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasRichText;
    protected $guarded = [];

    
    protected $richTextFields = [
        'body',
        
    ];
    protected $fillable = [
        'name',// $table->string('name');// Наименование
        'slug',// $table->string('slug');// Значение
        'image_id',// $table->foreignId('image_id')->nullable()->constrained('files');// ссылка на картинку
        'audio_id',// $table->foreignId('audio_id')->nullable()->constrained('files');// ссылка на аудио
        'category_id',// $table->foreignId('category_id')->nullable()->constrained('categories');// ссылка на категорию
        //'description',// $table->text('description')->nulable();// Описание
        'short_description',// $table->text('description')->nulable();// Описание
        'views',// $table->integer('views');// Просмотры
        'public',// $table->boolean('public')->default(false);// Опубликовано
        'price',// $table->string('price')->nulable();// цена
        'old_price',// $table->string('old_price')->nulable();// старая цена
    ];
    public function image()
    {
        return $this->belongsTo(File::class, 'image_id');
    }

    public function audio()
    {
        return $this->belongsTo(File::class, 'audio_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
