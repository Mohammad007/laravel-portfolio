<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setting;
use App\Models\Profile;
use App\Models\About;
use App\Models\Work;
use App\Models\School;
use App\Models\Project;
use App\Models\Seo;
use App\Models\Cate;
use App\Models\Portfolio;
use App\Models\User;
use DB;
use Redirect;

class AdminController extends Controller
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

        return view('admin.home',compact('profile','setting','about'));
    }

    public function login()
    {
        return view('admin.login');
    }

    public function insert(Request $request){
        $email = $request->email;
        $password = $request->password;
        $request->session()->flash('email',"$email");
        $query = DB::select('select * from users where email = ? and password = ?', [$email,$password]);
        if($query){
               $_SESSION['email'] = $email;
        return redirect()->route('dashboard');
        }
        else{
            $request->session()->flash('msg','Email and Password not match');
            return redirect()->route('login');
        }
    }

    public function user(){

        $setting = DB::select('select * from settings');
        $profile =  DB::select('select * from profiles');
        $user = User::all();
        return view('admin.user',compact('profile','setting','user'));
    }

    public function delete($id)
    {
      $delete = User::find($id)->delete();
      if($delete)
        {
            return redirect()->route('user');
        }
        
    }

    public function edit($id)
    {
        $setting = DB::select('select * from settings');
        $profile =  DB::select('select * from profiles');
        $user = User::all();
        $data = User::find($id);

        return view('admin.user',compact('data','profile','setting','user'));
    }

    public function add(Request $request)
    {
        $user = new User($request->all());
        $updated = $user->save();
        if($updated)
          {
              return redirect()->route('user');
          }
    }
}

