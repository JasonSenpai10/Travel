<?php

namespace App\Http\Controllers;

use App\Models\FroSlider;
use Illuminate\Http\Request;

class FroSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider= FroSlider::all();
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $slider=FroSlider::all();
        return view('admin.slider.create', compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sanitized = $request->validate([
            'photo'=>['required'],
            'quote'=>['required'],
        ]);
        $slider = FroSlider::create($sanitized);
        foreach($request->photo as $p) {
            $slider->addMedia($p)->toMediaCollection();
        }
    
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FroSlider $froSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slider=FroSlider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sanitized = $request->validate([
            'photo'=>['nullable'],
            'quote'=>['required'],
        ]);
        $slider=FroSlider:: find($id);
        $slider->update($sanitized);
        if($request->has('photo') && $request->photo !== null) {
            $slider->clearMediaCollection();

            $slider->addMedia($sanitized['photo'])->toMediaCollection();

        }
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slider= FroSlider::find($id);
        $slider->delete();
        return redirect()->back();
    }
}