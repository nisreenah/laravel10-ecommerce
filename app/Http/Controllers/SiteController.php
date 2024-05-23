<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $homeSlider = HomeSlider::find(1);
        return view('frontend.index', compact('homeSlider'));
    }
}
