<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response=Response::all();
        return view('admin.response.index', compact('response'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $response =Response::all();
        return view('frontend.index', compact('response'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sanitized=$request->validate([
            'name'=>['required'],
            'email'=>['required'],
            'message'=>['required']
        ]);
        $response = Response::create($sanitized);
        Session::flash('success', 'Message sent successfully');
        
        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully',
            'response_id' => $response->id // Send response ID for potential further use
        ]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Response $response)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Response $response)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)

    {
        $response=Response::find($id);
        $response->delete();
        return redirect()->back();

    }
}