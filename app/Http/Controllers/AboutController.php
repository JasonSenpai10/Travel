<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about=About::all();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $about=About::all();
        return view ('admin.about.create', compact ('about'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sanitized =$request->validate([
            'about'=>['required'],
            'photo'=>['required']
        ]);
        $about=About::create($sanitized);
        foreach($request->photo as $p) {
            $about->addMedia($p)->toMediaCollection();
        }
    
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about=About::find($id);
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sanitized = $request->validate([
            'photo'=>['nullable'],
            'about'=>['required'],
        ]);
        $about=About:: find($id);
        $about->update($sanitized);
        if($request->has('photo') && $request->photo !== null) {
            $about->clearMediaCollection();

            $about->addMedia($sanitized['photo'])->toMediaCollection();

        }
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about= About::find($id);
        $about->delete();
        return redirect()->back();
    }
}