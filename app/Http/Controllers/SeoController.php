<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Profile;
use App\Models\Seo;
use DB;
use Redirect;

class SeoController extends Controller
{
    public function index()
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $seo = Seo::all();

        return view('admin.seo',compact('profile','setting','seo'));
    }

    public function create(Request $request)
    {
        $cate = new Seo($request->all());
        $updated=$cate->save();
        if($updated)
          {
              return redirect()->route('admin/seo');
          }
    }

    public function delete($id)
    {
      $delete=Seo::find($id)->delete();
      if($delete)
        {
            return redirect()->route('admin/seo');
        }
        
    }

    public function edit($id)
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $seo = Seo::all();
        $data = Seo::find($id);

        return view('admin.seo',compact('data','profile','setting','seo'));
    }

    public function update(Request $request)
    {
        $cate = Seo::find($request->id);
        $cate->title = $request->title; 
        $cate->meta_title = $request->meta_title;
        $cate->desc = $request->desc;

        $updated=$cate->save();
        if($updated)
          {
            return redirect()->route('admin/seo');
          }
    }
}
