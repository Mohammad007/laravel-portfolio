<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Profile;
use App\Models\Work;
use DB;
use Redirect;

class WorkController extends Controller
{
    public function index()
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $work = Work::all();

        return view('admin.work',compact('profile','setting','work'));
    }

    public function create(Request $request)
    {
        $work = new Work($request->all());
        $updated = $work->save();
        if($updated)
          {
              return redirect()->route('admin/work');
          }
    }

    public function delete($id)
    {
      $delete = Work::find($id)->delete();
      if($delete)
        {
            return redirect()->route('admin/work');
        }
        
    }

    public function edit($id)
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $data = Work::find($id);
        $work = Work::all();

        return view('admin.work',compact('data','profile','setting','work'));
    }

    public function update(Request $request)
    {
        $work = Work::find($request->id);

        $work->project = $request->project ; 
        $work->title = $request->title;
        $work->year = $request->year ; 
        $work->content = $request->content;
        $work->work1 = $request->work1; 
        $work->work2 = $request->work2; 
        $work->work3 = $request->work3; 

        $updated=$work->save();
        if($updated)
          {
            return redirect()->route('admin/work');
          }
    }
}
