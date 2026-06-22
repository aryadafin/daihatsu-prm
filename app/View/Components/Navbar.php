<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $isHome;
    public $isCarShow;

    public function __construct()
    {
        $this->isHome = request()->routeIs('front.index');
        $this->isCarShow = request()->routeIs('front.car');
    }

    public function render()
    {
        return view('components.navbar');
    }
}