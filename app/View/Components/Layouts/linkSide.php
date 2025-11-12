<?php

namespace App\View\Components\layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class linkSide extends Component
{
    public string $href;
    public $icon;
    public string $label;
    public bool   $hasDropdown;
    public bool   $isActive;

    public function __construct(string $href = '#', $icon = null, $label = '', $hasDropdown = false)
    {
        $this->href = $href;
        $this->icon = $icon;
        $this->label = $label;
        $this->hasDropdown = $hasDropdown;
        $this->isActive = $this->checkActive($href);
    }

    private function checkActive($href): bool
    {
        if (Route::has($href) && request()->routeIs($href)) {
            return true;
        }

        return request()->is(trim($href, '/'));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.link-side');
    }
}
