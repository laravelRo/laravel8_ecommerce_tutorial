<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\content\Section;
use App\Http\Controllers\Controller;

class SectionsController extends Controller
{
    //afisam pagina unei sectiuni
    public function showSection($slug)
    {
        $section = Section::where('slug', $slug)->first();
        return view('front.content.section')
            ->with('section', $section)
            ->with('open', 0);
    }
}
