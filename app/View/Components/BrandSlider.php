<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BrandSlider extends Component
{
    public array $logos;

    public function __construct(array $logos)
    {
        $this->logos = $logos;
    }

    public function render()
    {
        return view('components.brand-slider');
    }
}
