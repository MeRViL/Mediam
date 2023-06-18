<?php

namespace App\Http\Livewire\Dashboard\Site\Post;

use App\Models\Site\Category;
use App\Models\Site\Post;
use Livewire\Component;
use App\Models\Site\File;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Http\Livewire\Trix;

class Form extends Component
{
    use WithFileUploads;
    public $categories;
    public $image;
    public $audio;
    public $post;
    public $description;
    public $content;

    public $listeners = [
        Trix::EVENT_VALUE_UPDATED // trix_value_updated()
    ];

    public function trix_value_updated($value){
        //dd($value);
        $this->description = $value;
    }
    
    protected $rules = [
        'post.name' => 'required|min:3',// $table->string('name');// Наименование
        'post.slug' => 'required|min:3',// $table->string('slug');// Значение
        'post.image_id' => 'nullable',// $table->foreignId('image_id')->nullable()->constrained('files');// ссылка на картинку
        'post.audio_id' => 'nullable',// $table->foreignId('audio_id')->nullable()->constrained('files');// ссылка на аудио
        'post.category_id' => 'nullable',// $table->foreignId('category_id')->nullable()->constrained('categories');// ссылка на категорию
        'post.description' => 'nullable',// $table->text('description')->nulable();// Описание
        'post.short_description' => 'nullable',// $table->text('description')->nulable();// Описание
        'post.views' => 'nullable',// $table->integer('views');// Просмотры
        'post.public' => 'nullable',// $table->boolean('public')->default(false);// Опубликовано
        'post.price' => 'nullable',// $table->string('price')->nulable();// цена
        'post.old_price' => 'nullable',// $table->string('old_price')->nulable();// старая цена
    ];
    protected $messages = [
        'post.name' => 'required|min:3',// $table->string('name');// Наименование
        'post.slug' => 'required|min:3',// $table->string('slug');// Значение
        'post.image_id' => 'nullable',// $table->foreignId('image_id')->nullable()->constrained('files');// ссылка на картинку
        'post.audio_id' => 'nullable',// $table->foreignId('audio_id')->nullable()->constrained('files');// ссылка на аудио
        'post.category_id' => 'nullable',// $table->foreignId('category_id')->nullable()->constrained('categories');// ссылка на категорию
        'post.description' => 'required',// $table->text('description')->nulable();// Описание
        'post.short_description' => 'nullable',// $table->text('description')->nulable();// Описание
        'post.views' => 'nullable',// $table->integer('views');// Просмотры
        'post.public' => 'nullable',// $table->boolean('public')->default(false);// Опубликовано
        'post.price' => 'nullable',// $table->string('price')->nulable();// цена
        'post.old_price' => 'nullable',// $table->string('old_price')->nulable();// старая цена
    ];
    

    public function saveFile($image, $desc)
    {
        //dd($image);
        if(!$this->post->$desc){
            $file = new File;
        }else{
            $file = $this->post->$desc;
        }
        //dd( $file);

        $file->name = $image->getClientOriginalName();
        $file->slug = Str::slug($file->name);
        
        $image = $image->store('post', 'public');
       
        
        $file->url = 'storage/'.$image;
        $file->description = $desc;
        
        $file->save();
        return $file->id;
    }
    
    public function changeName()
    {
        $this->post->slug = Str::slug($this->post->name);
    }

    public function submit()
    {
        //dd($this->post->description);
        if($this->image){
            $this->post->image_id = $this->saveFile($this->image, 'image');
        }
        if($this->audio){
            $this->post->audio_id = $this->saveFile($this->audio, 'audio');
        }
        //$this->post->description = $this->description ?? $this->post->description;
        $this->validate();
        $this->post->save();
        // $this->emit('reinit');
        return redirect(route('site.posts.index'));
    }

    public function mount(Post $post){
        $this->categories = Category::pluck( 'name', 'id')->All();
        //dd($this->categories);
        $this->post = $post;
        $this->content = $post->description;
        //dd($this->description);
    }
    public function render()
    {
        return view('livewire.dashboard.site.post.form');
    }
}
