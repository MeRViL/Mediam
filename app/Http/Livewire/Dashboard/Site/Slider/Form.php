<?php

namespace App\Http\Livewire\Dashboard\Site\Slider;

use Livewire\Component;
use App\Models\Site\Slider;
use App\Models\Site\File;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $slider;
    public $image;

    protected $rules = [
        'slider.name' => 'string', 
        'slider.slug' => 'string', 
        'slider.url' => 'string', 
        'slider.align' => 'string|nullable',
        'image' => 'image|nullable',
        'slider.description' => 'string|nullable',
        'slider.action' => 'string', 
        'slider.public' => 'bool|nullable',
    ];

    public function changeName()
    {
        $this->slider->slug = Str::slug($this->slider->name);
    }
    
    public function submit()
    {
        $this->validate();
        $file = new File;
        $file->name = $this->image->getClientOriginalName();
        $file->slug = Str::slug($file->name);
        
        $this->image = $this->image->store('sliders', 'public');
       
        
        $file->url = $this->image;
        $file->description = 'Картинка слайдера';
        //dd($file);
        //dd($this->image);
        $file->save();
        $this->slider->image_id = $file->id;
        // $this->path = $this->path->store('vps', 'public');
        //dd($this->slider);
        $this->slider->save();
        return redirect(route('site.sliders.index'));
        // $this->reset('slider');
        // $this->reset('image');
        // $this->slider = new Slider;
        
    }

    public function mount(Slider $slider)
    {
        $this->slider = $slider;
        if ($this->slider == null){
            $this->slider = new Slider;
        }
        // dd($this->slider);
    }
    
    public function render()
    {
        return view('livewire.dashboard.site.slider.form');
    }
}
