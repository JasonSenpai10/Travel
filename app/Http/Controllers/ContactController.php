<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact=Contact::all();
        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact=Contact::all();
        return view ('admin.contact.create', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sanitized=$request->validate([
            'email'=> ['required'],
            'num'=>['required'],
            'introduce'=>['required']
        ]);
        $contact=Contact::create($sanitized);
        foreach ($request ->photo as $p){
            $contact->addMedia($p)->toMediaCollection();
        }
        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact=Contact::find($id);
        return view('admin.contact.edit', compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)

    {
        $sanitized =$request->validate([
            'email'=> ['required'],
            'num'=>['required'],
            'introduce'=>['required'],
            'photo'=>['nullable']
        ]);
        $contact =Contact::find($id);
        $contact->update($sanitized);
        if($request->has('photo') && $request->photo !== null) {
            $contact->clearMediaCollection();

            $contact->addMedia($sanitized['photo'])->toMediaCollection();

        }
        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact=Contact::find($id);
        $contact->delete();
        return redirect()->back();
    }
}