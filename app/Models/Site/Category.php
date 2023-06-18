<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',// $table->string('name');// Наименование
        'position',// $table->string('name');// Наименование
        'slug',//$table->string('slug');// Значение
        'url',//$table->string('url')->nulable();// Значение
        'smal_image_id',//$table->foreignId('smal_image_id')->nullable()->constrained('files');// Родительская категория
        'big_image_id',//$table->foreignId('big_image_id')->nullable()->constrained('files');// Родительская категория
        'description',//$table->text('description')->nulable();// Значение
        'key_words',//$table->text('key_words')->nulable();// Значение
        'public',//$table->boolean('public')->default(false);// Опубликовано
        'in_menu',//$table->boolean('in_menu')->default(false);// Отображается в меню сайта
        'parent_id',//$table->boolean('in_menu')->default(false);// Отображается в меню сайта
    ];

    public function smal_image()
    {
        return $this->belongsTo(File::class, 'smal_image_id');
    }

    public function big_image()
    {
        return $this->belongsTo(File::class, 'big_image_id');
    }

    public function parent()
    {
        return $this->belongsTo(Self::class, 'parent_id');
    }
    public function children()
    {
        return $this->hasMany(Self::class,'parent_id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
