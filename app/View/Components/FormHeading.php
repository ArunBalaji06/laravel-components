<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormHeading extends Component
{

    public $label;
    public $for;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $for)
    {
        $this->label = $label;
        $this->for = $for;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-heading');
    }
}
