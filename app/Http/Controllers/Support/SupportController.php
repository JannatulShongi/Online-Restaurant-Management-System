<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function support(){

        $message=Support::where('from_user',auth()->user()->id)->OrWhere('to_user',auth()->user()->id)->get();

        return view ('frontend.support.support',compact('message'));
    }
public function message( Request $request )
{
    // dd($request->all());
$request->validate([
    'message'=>'required'
]);

    Support::create([

        'from_user'=>auth()->user()->id,
         'to_user'=>1,
        'message'=>$request->message,


  ]);

  return redirect()->back()->with('message', 'message sent sucessfully');
   }


   ////User SUppprt
   public function list(){
       $categories=support::with(['userFrom','userTo'])->get();

       return view ('backend.support.list',compact('categories'));
   }
   public function reply($id){

       return view ('backend.support.reply',compact('id'));
   }



public function send( Request $request )
{

$request->validate([
    'message'=>'required'
]);

$conversation=Support::find($request->message_id);

    Support::create([
        'from_user'=>auth()->user()->id,
        'to_user'=>$conversation->from_user,
        'message'=>$request->message,
  ]);

  return redirect()->route('backend.support.list');
  }
}
