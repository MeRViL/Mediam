<?php

namespace App\Http\Livewire\Dashboard\Site\Category;

use Livewire\Component;
use App\Models\Site\Category;

class Index extends Component
{
    public $categories;
    

    protected $listeners = ['changePosition'];
 
    
    
    public function changePosition()
    {
        return redirect(route('site.categories.index'));
    }
    
    public function getCategories()
    {
        $this->categories = Category::All()->sortBy('position');
    }
    
    
    public function mount()
    {
        $this->getCategories();
    }

    public function render()
    {
        return view('livewire.dashboard.site.category.index');
    }
}
