<?php

namespace App\View\Components\content;

use Illuminate\View\Component;
use App\Models\content\Section;

class SectionsSlider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $sections = Section::where('promo', 1)
            ->where('active', 1)
            ->orderBy('position')
            ->get();

        return view('components.content.sections-slider')
            ->with('sections', $sections);
    }
}
