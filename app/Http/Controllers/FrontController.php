<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliders;
use App\Models\Gallery;
use App\Models\Sections;
use App\Models\News;

class FrontController extends Controller
{
    public function index()
    {
      $sliders = Sliders::where('status', 1)->latest()->take(3)->get();
      $about = Sections::where(['status' => '1', 'category' => '1'])->latest()->take(1)->get();
      $services = Sections::where(['status' => '1', 'category' => '2'])->latest()->take(4)->get();
      $whyus = Sections::where(['status' => '1', 'category' => '3'])->latest()->take(1)->get();    
      $howto = Sections::where(['status' => '1', 'category' => '4'])->latest()->take(1)->get();   
      $news = News::where('status', 1)->latest()->take(3)->get();
      return view('frontoffice2.home', compact('sliders','about','whyus','news','services','howto'));
    }

    public function farm()
    {
      return view('frontoffice2.gallery');
    } 

    public function product()
    {
      return view('frontoffice2.gallery');
    }    

    public function contact()
    {
      return view('frontoffice2.contact');
    }
}
