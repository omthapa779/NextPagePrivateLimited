<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Button extends Component
{
    /**
     * Create a new component instance.
     */

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
    public $variant;
    public $extraClasses;

    public function __construct($variant = '', $extraClasses = '')
    {
        $this->variant = $variant;
        $this->extraClasses = $extraClasses;
    }

}
