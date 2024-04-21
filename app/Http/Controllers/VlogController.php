<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Vlog;
use Illuminate\Http\Request;

class VlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd("yes");
        $vlog=Vlog::all();
        return view('admin.vlog.index', compact('vlog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $location=Location::all();

        return view('admin.vlog.create', compact('location'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $sanitized = $request->validate([
        'photo'=>['required'],
        'location_id'=>['required'],
        'title'=>['required'],
        'date'=>['required'],
        'blog'=>['required']
     ] ); 
     $vlog = Vlog::create($sanitized);
        foreach($request->photo as $p) {
            $vlog->addMedia($p)->toMediaCollection();
        }
    
        return redirect()->route('vlog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vlog $vlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vlog= Vlog::find($id);
        $location=Location::all();
        return view ('admin.vlog.edit', compact('vlog', 'location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sanitized = $request->validate([
            'photo'=>['nullable'],
            'location_id'=>['required'],
            'title'=>['required'],
            'date'=>['required'],
            'blog'=>['required']
         ] ); 
         $vlog=Vlog:: find($id);
         $vlog->update($sanitized);
         if($request->has('photo') && $request->photo !== null) {
             $vlog->clearMediaCollection();
 
             $vlog->addMedia($sanitized['photo'])->toMediaCollection();
 
         }
         return redirect()->route('vlog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vlog $vlog)
    {
        $vlog->delete();
        return redirect()->back();
    }
}