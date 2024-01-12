<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Navbar as ModelsNavbar;
use App\Models\Navitem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $navitems;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $navbar = ModelsNavbar::find(1);
        $this->navitems = Navitem::whereHas('navbars', function (Builder $query) use ($navbar) {
            $query->where('navbars.id', $navbar->id);
        })
        ->whereDoesntHave('navitem')
        ->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar', ['navitems' => $this->navitems]);
    }
}
