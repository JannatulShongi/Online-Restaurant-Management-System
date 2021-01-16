<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\Authenticate;

class UsersController extends Controller
{
    public function registration(Request  $request)
    {
    //    dd($request->all());
       $request->validate([
          'name'=>'required',
          'email'=>'required|unique:users',
          'mobile'=>'required',
         'password'=>'required',
         'address'=>'required',

       ]);

       $file_name='';

       //        step1- check has file
                   if($request->hasFile('image'))
                   {
                       $image=$request->file('image');
                      //step2- generate unique name
                       $file_name=date('Ymdhms').'.'.$image->getClientOriginalExtension();
                      //step 3- store file with name
                       $image->storeAs('user',$file_name);

                   }


       User::create([
          'name'=>$request->name,
          'mobile'=>$request->mobile,
          'email'=>$request->email,
          'address'=>$request->address,
          'password'=>bcrypt($request->password),
          'image'=>$file_name
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



    public function profile(){
        // /dd(auth()->check());
        $user= auth()->user();
        $show=Order::where('user_id',auth()->user()->id)->paginate(5);
        //dd($profiles);
        return view ('frontend.login.profile',compact('user','show'));
    }

    public function edit($id){
        $user=User::find($id);
        return view  ('frontend.login.edit',compact('user'))->with('msg', 'Item add successfully');
    }

     public function update(Request $request,$id){
         dd($request->all());
        $this->validate($request, [

            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'address' => 'required',


            ]);



        $user =User::find($id);
        $user ->name =$request->name;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        $user->address=$request->address;



        $user->save();
          return redirect()->back()->with('message',' Update sucessfully');
       }


       public function password($id){
        $user=User::find($id);
        return view  ('frontend.login.password',compact('user'))->with('msg', 'Item add successfully');
       }

    //    public function done(Request $request,$id){

    //     dd($request->all());
    //     $user =User::find($id);

    //     $user ->password =$request->password;
    //     $user->password=$request->password;



    //     $user->save();
    //       return redirect()->back()->with('message',' Update sucessfully');
    //    }





       public function updated(Request $request, $id)
    {
        // dd($request->all());
         $this->validate($request, [

        'password' => 'required',
        'newpassword' => 'required',
        ]);





       $hashedPassword = Auth::user()->password;

       if (\Hash::check($request->password , $hashedPassword )) {

         if (!\Hash::check($request->newpassword , $hashedPassword)) {

              $user =User::find(Auth::user()->id);
              $user->password = bcrypt($request->newpassword);
              User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $user->password));


              return redirect()->back()->with('message','password updated successfully');
            }

            else{


                  return redirect()->back()->withErrors('New password should not same old password');
                }

           }

          else{

            //    session()->flash('message','old password doesnt matched ');
               return redirect()->back()->withErrors('old password doesnt matched');
             }

       }

    //    public function show(){
    //     $profile=Order::paginate(5);
    //     return view ('frontend.show',compact('profile'));

    //    }
    public function comment(Request $request,$id)
    {
        //dd($request->all());
        $request->validate([
            'comment'=>'required',
            ]);
            $cm =Order::find($id);
          $cm->comment = $request->comment;


          $cm->save();
          return redirect()->back()->with('message','comment sent sucessfully');
    }

}

