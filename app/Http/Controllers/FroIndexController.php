<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\FroSlider;
use App\Models\Photograph;
use App\Models\Skill;
use App\Models\Vlog;
use Illuminate\Http\Request;


class FroIndexController extends Controller
{
    public function Index(){
        
        $photograph=Photograph::latest()->limit('12')->get();
        $slider=FroSlider::latest()->limit('4')->get();
        $contact=Contact::latest()->limit('1')->get();
        $vlog= Vlog::latest()->limit('4')->get();
        return view('frontend.index', compact('slider','photograph', 'contact', 'vlog'));
    }
    public function About(){
        $about=About::latest()->limit('1')->get();
        $photograph=Photograph::latest()->limit('6')->get();
        $education = Education::orderBy('created_at', 'desc')->get();
        $experience= Experience::orderBy('created_at', 'desc')->get();
        $skill = Skill::all();
        return view('frontend.about', compact('photograph', 'about', 'education', 'experience', 'skill'));
    }
    
    public function Blog(){
        $vlog= Vlog::all();
        $photograph=Photograph::latest()->limit('6')->get();
        return view ('frontend.blog', compact('photograph', 'vlog'));
    }
   
    public function Content(Vlog $vlog){
        $photograph = Photograph::latest()->limit('6')->get();
        return view('frontend.content', compact('photograph', 'vlog'));
    }

}