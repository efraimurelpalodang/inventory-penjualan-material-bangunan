<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public string $name;
    public string $id;
    public string $label;
    public string $placeholder;
    public $required;
    public string $message;
    public string $autoComplate;

    public function __construct(string $name, string $id, string $label, string $placeholder = '', $required = null, string $message ='', $autoComplate = 'off')
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->message = $message;
        $this->autoComplate = $autoComplate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
