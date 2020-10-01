<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Profile;
use App\Models\Cate;
use App\Models\Portfolio;
use DB;
use Redirect;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $category = Cate::all();
        $portfolio = Portfolio::all();

        return view('admin.portfolio',compact('profile','setting','category','portfolio'));
    }

    public function create(Request $request)
    {
        $portfolio = new Portfolio($request->all());
        if($request->image != '')
        {
          $rand=rand('100000','999999');
          $destinationPath = public_path('/images');
          $image_name=$request->image->getClientOriginalName();
          $image_name = $rand.str_replace(' ','',$image_name);
          $request->image->move($destinationPath, $image_name);
          $portfolio->image=$image_name;
        }
        $updated=$portfolio->save();
        if($updated)
          {
              return redirect()->route('admin/portfolio');
          }
    }

    public function delete($id)
    {
      $delete=Portfolio::find($id)->delete();
      if($delete)
        {
            return redirect()->route('admin/portfolio');
        }
        
    }

    public function edit($id)
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');
        $category = Cate::all();
        $portfolio = Portfolio::all();
        $data = Portfolio::find($id);

        return view('admin.portfolio',compact('data','profile','setting','category','portfolio'));
    }

    public function update(Request $request)
    {
        $portfolio = Portfolio::find($request->id);
        $portfolio->category_tag = $request->category_tag;
        if($request->image != '')
        {
          $rand=rand('100000','999999');
          $destinationPath = public_path('/images');
          $image_name=$request->image->getClientOriginalName();
          $image_name = $rand.str_replace(' ','',$image_name);
          $request->image->move($destinationPath, $image_name);
          $portfolio->image=$image_name;
        }

        $updated=$portfolio->save();
        if($updated)
          {
            return redirect()->route('admin/portfolio');
          }
    }
}
