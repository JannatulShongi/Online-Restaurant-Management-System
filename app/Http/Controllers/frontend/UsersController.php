<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;



class UsersController extends Controller
{
    public function registration(Request  $request)
    {
       //dd($request->all());
       $request->validate([
          'name'=>'required',
          'email'=>'required',
          'mobile'=>'required',
         'password'=>'required',

       ]);

       User::create([
          'name'=>$request->name,
          'mobile'=>$request->mobile,
          'email'=>$request->email,
          'password'=>bcrypt($request->password)
       ]);

       return redirect()->back()->with('message','User Registration Successful.');
    }
    public function login(Request $request)
    {

        $request->validate([

            'email'=>'required|email',
            'password'=>'required',
        ]);

        $credentials = $request->except('_token');
        // dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('msg','Login Success!');
        }else
        {
            return redirect()->back()->withErrors('Invalid Credentials');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back()->with('message','Logout Success!');
    }

    public function list(){
        $list=User::paginate(5);
       return view ('backend.registration.list',compact('list'));
    }
}
