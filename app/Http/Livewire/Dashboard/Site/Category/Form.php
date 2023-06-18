<?php

namespace App\Http\Livewire\Dashboard\Site\Category;

use Livewire\Component;
use App\Models\Site\Category;
use App\Models\Site\File;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $category;
    public $categories;
    public $smal_image;
    public $big_image;

    protected $rules = [
        
        'category.name' => 'string',// $table->string('name');// Наименование
        'category.slug' => 'string',//$table->string('slug');// Значение
        'category.url' => 'string|nullable',//$table->string('url')->nulable();// Значение
        'smal_image' => 'image|nullable',//$table->foreignId('smal_image_id')->nullable()->constrained('files');// Родительская категория
        'big_image' => 'image|nullable',//$table->foreignId('big_image_id')->nullable()->constrained('files');// Родительская категория
        'category.description' => 'string|nullable',//$table->text('description')->nulable();// Значение
        'category.key_words' => 'string|nullable',//$table->text('key_words')->nulable();// Значение
        'category.public' => 'bool|nullable',//$table->boolean('public')->default(false);// Опубликовано
        'category.in_menu' => 'bool|nullable',//$table->boolean('in_menu')->default(false);// Отображается в меню сайта
    ];
    public function saveImage($image, $desc)
    {
        //dd($image);
        if(!$this->category->$desc){
            
            $file = new File;
        }else{
            // Storage::disk('public')->delete($this->path);
            $file = $this->category->$desc;
        }
        //dd( $file);

        $file->name = $image->getClientOriginalName();
        $file->slug = Str::slug($file->name);
        
        $image = $image->store('category', 'public');
       
        
        $file->url = 'storage/'.$image;
        $file->description = 'Картинка категории'.$desc;
        
        $file->save();
        return $file->id;
    }
    public function submit()
    {
        //dd($this->category);
        $this->validate();
        if($this->smal_image){
            
            $this->category->smal_image_id = $this->saveImage($this->smal_image, 'smal_image');
        }
        if($this->big_image){
            $this->category->big_image_id = $this->saveImage($this->big_image, 'big_image');
        }
        
        
        
 
        // Execution doesn't reach here if validation fails.
        
        $this->category->save();
        return redirect(route('site.categories.index'));
    }
    public function mount(Category $category){
        $this->category = $category;
        $this->categories = Category::all();
        // dd($this->category);
    }

    public function changeName()
    {
        $this->category->slug = Str::slug($this->category->name);
    }

    public function render()
    {
        return view('livewire.dashboard.site.category.form');
    }
}
