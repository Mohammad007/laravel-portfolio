<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Profile;
use App\Models\School;
use DB;
use Redirect;

class EducationController extends Controller
{
    public function index()
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $school = School::all();

        return view('admin.education',compact('profile','setting','school'));
    }

    public function create(Request $request)
    {
        $school = new School($request->all());
        $updated = $school->save();
        if($updated)
          {
              return redirect()->route('admin/education');
          }
    }

    public function delete($id)
    {
      $delete = School::find($id)->delete();
      if($delete)
        {
            return redirect()->route('admin/education');
        }
        
    }

    public function edit($id)
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $data = School::find($id);
        $school = School::all();

        return view('admin.education',compact('data','profile','setting','school'));
    }

    public function update(Request $request)
    {
        $school = School::find($request->id);

        $school->degree = $request->degree ; 
        $school->college = $request->college;
        $school->year = $request->year ; 
        $school->content = $request->content;

        $updated=$school->save();
        if($updated)
          {
            return redirect()->route('admin/education');
          }
    }
}
