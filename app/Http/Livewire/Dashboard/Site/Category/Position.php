<?php

namespace App\Http\Livewire\Dashboard\Site\Category;

use Livewire\Component;

class Position extends Component
{
    public $category;

    protected $rules = [
        
        'category.position' => 'int',// $table->string('name');// Наименование
        
    ];

    public function changePosition()
    {
        $this->category->save();
        $this->emit('changePosition');
        // dd($this->category);
    }
    
    public function render()
    {
        return view('livewire.dashboard.site.category.position');
    }
}
