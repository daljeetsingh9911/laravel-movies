<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TvComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $tvShow;
    public $genres;
    public function __construct($tvShow,$genres)
    {   
        $this->tvShow = $tvShow;
        $this->genres = $genres;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tv-component');
    }
}
