<?php

namespace App\Http\Controllers;

use App\Models\Photograph;
use Illuminate\Http\Request;

class PhotographController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photograph= Photograph::all();
        return view('admin.photograph.index', compact('photograph'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $photograph= Photograph::all();
        return view('admin.photograph.create', compact('photograph'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sanitized = $request->validate([
            'photo'=>['required',],
            'something'=>['required'],
        ]);
        $photograph = Photograph::create($sanitized);
        foreach($request->photo as $p) {
            $photograph->addMedia($p)->toMediaCollection();
        }
    
        return redirect()->route('photograph.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Photograph $photograph)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $photograph=Photograph::find($id);
        return view('admin.photograph.edit', compact('photograph'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sanitized = $request->validate([
            'photo'=>['nullable'],
            'something'=>['required'],
        ]);
        $photograph=Photograph:: find($id);
        $photograph->update($sanitized);
        if($request->has('photo') && $request->photo !== null) {
            $photograph->clearMediaCollection();

            $photograph->addMedia($sanitized['photo'])->toMediaCollection();

        }
        return redirect()->route('photograph.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $photograph= Photograph::find($id);
        $photograph->delete();
        return redirect()->back();
    }
}