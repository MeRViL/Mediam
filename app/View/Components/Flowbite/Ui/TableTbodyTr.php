<?php

namespace App\View\Components\Flowbite\Ui;

use Illuminate\View\Component;

class TableTbodyTr extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flowbite.ui.table-tbody-tr');
    }
}
