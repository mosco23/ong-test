<?php

namespace App\View\Components;

use App\Models\Navitem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubNavbar extends Component
{
    public $isActive;
    public $navitem;
    /**
     * Create a new component instance.
     */
    public function __construct($link)
    {
        $this->navitem = Navitem::firstWhere('link', $link);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sub-navbar', ['navitem' => $this->navitem ]);
    }
}
