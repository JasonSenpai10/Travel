<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location=Location::all();
        return view('admin.location.index', compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $location=Location::all();
        return view('admin.location.create', compact('location'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sanitized=$request->validate([
            'location'=>'required'
        ]);
        Location::create($sanitized);
        return redirect()->route('location.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $location=Location::find($id);
        return view ('admin.location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $sanitized=$request->validate([
            'location'=>'required'
        ]);
        $location ->update ($sanitized);
        return redirect()->route('location.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->back();
    }
}