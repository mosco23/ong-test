<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Navbar;
use App\Models\Navitem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarBottom extends Component
{
    public $navitems;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $navbar = Navbar::where('name', 'desktop-bottom')->get()->last();
        $this->navitems = Navitem::whereHas('navbars', function (Builder $query) use ($navbar) {
            $query->where('navbars.id', $navbar->id);
        })
        ->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar-bottom', ['navitems' => $this->navitems]);
    }
}
