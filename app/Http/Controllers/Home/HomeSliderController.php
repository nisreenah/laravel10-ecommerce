<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeSliderController extends Controller
{
    public function show()
    {
        $home_sliders = HomeSlider::all();
        return view('/admin/home_slider/index', compact('home_sliders'));
    }

    public function edit($home_slider_id)
    {
        $home_slider = HomeSlider::findOrFail($home_slider_id);
        return view('/admin/home_slider/edit', compact('home_slider'));
    }

    public function update(Request $request, HomeSlider $home_slider_id)
    {
        $home_slider = HomeSlider::findOrFail($home_slider_id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/home_images'), $filename);
            $request->image = $filename;
        }
        
        $inputs = $request->all();
        $home_slider->update($inputs);

        toastr()->success('Home slider successfully updated!');

        return Redirect::back();
    }
}
