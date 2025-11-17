<?php

namespace App\View\Components\table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Row extends Component
{
    protected $rowData; 

    public function __construct($rowData)
    {
        $this->rowData = $rowData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.row', [
            'rowData' => $this->rowData
        ]);
    }
}
