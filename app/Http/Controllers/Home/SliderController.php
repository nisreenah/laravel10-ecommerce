<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeSliders = HomeSlider::all();
        return view('admin.home_slider.index', compact('homeSliders'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($homeSliderId)
    {
        $homeSlider = HomeSlider::findOrFail($homeSliderId);
        return view('admin.home_slider.edit' ,compact('homeSlider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $homeSliderId)
    {
        $request->validate([
            'image' => 'nullable',
            'title' => 'required',
            'short_title' => 'required',
            'video_url' => 'required',
        ]);

        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/home_images'), $filename);
            $inputs['image'] = $filename;
        }
        $homeSlider = HomeSlider::findOrFail($homeSliderId);
        $updated =  $homeSlider->update($inputs);
        if (!$updated)
            toastr()->warning('Failed to update the Home slider!');

        toastr()->success('Home slider successfully updated!');
        return redirect()->route('sliders.index');
    }
}
