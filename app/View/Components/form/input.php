<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public string $name;
    public string $label;
    public ?string $id;
    public ?string $placeholder;
    public ?bool $required;
    public ?string $message;
    public string $autoComplate;
    public $value;
    public string $type;

    public function __construct(string $name,
        string $label = '',
        string $type = 'text',
        $value = null,
        $id = null,
        string $placeholder = '',
        $required = false,
        string $message ='',
        string $autoComplate = 'off')
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->value = $value;
        $this->id = $id ?? $name;
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
