<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class select extends Component
{
    public string $name;
    public string $id;
    public string $label;
    public $required;
    public string $message;
    
    public function __construct(string $name = '', string $id = '', string $label = '', $required = null, string $message = '')
    {
        $this->name = $name;
        $this->id = $id;
        $this->label = $label;
        $this->required = $required;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.select');
    }
}
