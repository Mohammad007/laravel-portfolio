<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Profile;
use App\Models\About;
use DB;
use Redirect;

class AboutController extends Controller
{
    public function index()
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $about = About::all();

        return view('admin.about',compact('profile','setting','about'));
    }

    public function update(Request $request)
    {

        $about = About::find($request->id);

        $about->content = $request->content; 

        $about->no0 = $request->no0; 
        $about->lang0 = $request->lang0;

        $about->no1 = $request->no1; 
        $about->lang1 = $request->lang1;

        $about->no2 = $request->no2; 
        $about->lang2 = $request->lang2;

        $about->no3 = $request->no3; 
        $about->lang3 = $request->lang3;

        $updated = $about->save();
        if($updated)
          {
              return redirect()->route('admin/about');
          }
    }
}
