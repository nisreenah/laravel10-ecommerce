<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\HomeSlider;

class SiteController extends Controller
{
    public function index()
    {
        $homeSlider = HomeSlider::find(1);
        $about = About::find(1);
        return view('frontend.index', compact('homeSlider','about'));
    }
}
