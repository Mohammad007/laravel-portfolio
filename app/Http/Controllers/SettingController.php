<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Profile;
use DB;
use Redirect;

class SettingController extends Controller
{
    public function index()
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');

        return view('admin.setting',compact('profile','setting'));
    }

    public function update(Request $request)
    {
        // $setting = DB::select('select * from settings');
        $setting=Setting::find($request->id);
        $setting->location = $request->location ; 
        $setting->contact = $request->contact;
        $setting->color = $request->color;
        $setting->email = $request->email; 
        $setting->footer = $request->footer; 

        if($request->favicon != '')
          {
            $rand=rand('100000','999999');
            $destinationPath = public_path('/images');
            $image_name=$request->favicon->getClientOriginalName();
            $image_name = $rand.str_replace(' ','',$image_name);
            $request->favicon->move($destinationPath, $image_name);
            $setting->favicon=$image_name;
          }
          if($request->logo != '')
          {
            $rand=rand('100000','999999');
            $destinationPath = public_path('/images');
            $image_name=$request->logo->getClientOriginalName();
            $image_name = $rand.str_replace(' ','',$image_name);
            $request->logo->move($destinationPath, $image_name);
            $setting->logo=$image_name;
          }
        $updated=$setting->save();
        if($updated)
          {
              return redirect()->route('admin/setting');
          }
    }
}
