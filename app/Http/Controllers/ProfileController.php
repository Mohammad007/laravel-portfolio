<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Profile;
use DB;
use Redirect;

class ProfileController extends Controller
{
    public function index()
    {
        $profile =  DB::select('select * from profiles');
        $setting = DB::select('select * from settings');

        return view('admin.profile',compact('profile','setting'));
    }

    public function update(Request $request)
    {
        $profile=Profile::find($request->id);
        $profile->name = $request->name ; 
        $profile->posts = $request->posts;
        $profile->dob = $request->dob;
        $profile->email = $request->email; 
        $profile->status = $request->status;
        $profile->lin = $request->lin;
        $profile->ins = $request->ins;
        $profile->fb = $request->fb; 
        $profile->twi = $request->twi;

        if($request->cv != '')
          {
            $rand=rand('100000','999999');
            $destinationPath = public_path('/images');
            $image_name=$request->cv->getClientOriginalName();
            $image_name = $rand.str_replace(' ','',$image_name);
            $request->cv->move($destinationPath, $image_name);
            $profile->cv=$image_name;
          }
          if($request->profile != '')
          {
            $rand=rand('100000','999999');
            $destinationPath = public_path('/images');
            $image_name=$request->profile->getClientOriginalName();
            $image_name = $rand.str_replace(' ','',$image_name);
            $request->profile->move($destinationPath, $image_name);
            $profile->profile=$image_name;
          }
        $updated=$profile->save();
        if($updated)
          {
              return redirect()->route('admin/profile');
          }
    }
}