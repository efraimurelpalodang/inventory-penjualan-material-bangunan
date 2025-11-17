<?php

namespace App\View\Components\table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    public $title;
    public $headers;
    public $routeCreate;

    public function __construct($title, $headers = [], $routeCreate = null)
    {
        $this->title = $title;
        $this->headers = $headers;
        $this->routeCreate = $routeCreate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.main');
    }
}
