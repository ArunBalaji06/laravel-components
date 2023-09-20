<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Index extends Component
{
    public $datas;
    public $id;
    public $headings;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($datas, $id, $headings)
    {
        $this->datas = $datas;
        $this->id = $id;
        $this->headings = $headings;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.index');
    }
}
