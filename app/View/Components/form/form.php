<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form extends Component
{
    public string $action;
    public string $method;
    public string $buttonText;
    public string $back;
    
    public function __construct(string $action = '', string $method = '', string $buttonText = '', string $back = '')
    {
        $this->action = $action;
        $this->method = $method;
        $this->buttonText = $buttonText;
        $this->back = $back;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.form');
    }
}
