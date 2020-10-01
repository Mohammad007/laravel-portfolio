<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Profile;
use App\Models\Project;
use DB;
use Redirect;

class ProjectController extends Controller
{
    public function index()
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $project = Project::all();

        return view('admin.project',compact('profile','setting','project'));
    }

    public function create(Request $request)
    {
        $Project = new Project($request->all());
        $updated=$Project->save();
        if($updated)
          {
              return redirect()->route('admin/project');
          }
    }

    public function delete($id)
    {
      $delete=Project::find($id)->delete();
      if($delete)
        {
            return redirect()->route('admin/project');
        }
        
    }

    public function edit($id)
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $project = Project::all();
        $data = Project::find($id);

        return view('admin.project',compact('data','profile','setting','project'));
    }

    public function update(Request $request)
    {
        $Project = Project::find($request->id);
        $Project->no1 = $request->no1 ; 
        $Project->title1 = $request->title1;

        $updated=$Project->save();
        if($updated)
          {
            return redirect()->route('admin/project');
          }
    }
}
