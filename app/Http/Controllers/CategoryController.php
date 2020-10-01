<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Profile;
use App\Models\Cate;
use DB;
use Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $category = Cate::all();

        return view('admin.category',compact('profile','setting','category'));
    }

    public function create(Request $request)
    {
        $cate = new Cate($request->all());
        $updated=$cate->save();
        if($updated)
          {
              return redirect()->route('admin/category');
          }
    }

    public function delete($id)
    {
      $delete=Cate::find($id)->delete();
      if($delete)
        {
            return redirect()->route('admin/category');
        }
        
    }

    public function edit($id)
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $category = Cate::all();
        $data = Cate::find($id);

        return view('admin.category',compact('data','profile','setting','category'));
    }

    public function update(Request $request)
    {
        $cate = Cate::find($request->id);
        $cate->category = $request->category ; 
        $cate->category_tag = $request->category_tag;

        $updated=$cate->save();
        if($updated)
          {
            return redirect()->route('admin/category');
          }
    }
}
