<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', // $table->string('name');// Наименование
        'slug', // $table->string('slug');// Значение
        'url', // $table->string('url')->nulable();// Значение
        'align', // $table->string('url')->nulable();// Значение
        'image_id', // $table->foreignId('image_id')->nullable()->constrained('files');// Родительская категория
        'description', // $table->text('description')->nulable();// Значение
        'action', // $table->text('action')->nulable();// Значение
        'public', // $table->boolean('public')->default(false);// Опубликовано
    ];

    public function image()
    {
        return $this->belongsTo(File::class, 'image_id');
    }
}
