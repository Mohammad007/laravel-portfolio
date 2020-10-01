<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Profile;
use App\Models\About;
use App\Models\Work;
use App\Models\School;
use App\Models\Project;
use App\Models\Seo;
use App\Models\Cate;
use App\Models\Portfolio;
use DB;

class HomeController extends Controller
{

    public function index()
    {
        $profile =  DB::select('select * from profiles');
        $about =    About::all(); 
        $work =     Work::all(); 
        $education =School::all(); 
        $project =Project::all(); 
        $category =Cate::all();
        $portfolio =Portfolio::all();
        $setting = DB::select('select * from settings');
        $seo = DB::select('select * from seos');

        return view('home', compact('portfolio','category','seo','setting','profile','about','work','education','project'));

}

}
