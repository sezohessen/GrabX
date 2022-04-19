<?php

namespace App\View\Components;

use Illuminate\View\Component;

class QtyInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $key;
    public $id;
    public $inputQty;

    public function __construct($key,$id,$inputQty)
    {
        $this->key          = $key;
        $this->id           = $id;
        $this->inputQty     = $inputQty;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.qty-input');
    }
}
