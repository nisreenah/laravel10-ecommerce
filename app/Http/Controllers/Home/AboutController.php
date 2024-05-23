<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit' ,compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'desc' => 'required',
        ]);

        $inputs = $request->all();
        $about = About::findOrFail($id);
        $updated =  $about->update($inputs);
        if (!$updated)
            toastr()->warning('Failed to update the about me section!');

        toastr()->success('About me successfully updated!');
        return redirect()->route('about.index');
    }
}
