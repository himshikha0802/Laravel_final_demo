<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function contactForm()
    {
       return view('admin.auth.contact');
    }
    public function homeForm()
    {
      if(auth()->check()){
         return redirect()->route('dashboard');
      }
       return view('admin.auth.home');
    }
    public function aboutForm()
    {
       return view('admin.auth.about');
    }

 //public function teamForm()
    // {
      // $doctors = Doctor::get();
       //  return view('admin.auth.team',compact('doctors'));

     //}
    public function galleryForm()
    {
       return view('admin.auth.gallery');
    }
    public function appointmentForm()
    {
       return view('admin.auth.appointment');
    }
}
