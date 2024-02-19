<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\FroSlider;
use App\Models\Photograph;
use Illuminate\Http\Request;


class FroIndexController extends Controller
{
    public function Index(){
        
        $photograph=Photograph::latest()->limit('6')->get();
        $slider=FroSlider::latest()->limit('4')->get();
        $contact=Contact::latest()->limit('1')->get();
        return view('frontend.index', compact('slider','photograph', 'contact'));
    }
    public function About(){
        $photograph=Photograph::latest()->limit('6')->get();
        return view('frontend.about', compact('photograph'));
    }
    



}