<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryManController extends Controller
{
    public function create(){
        return view ('backend.delivery.create');
    }
    public function list(){
        $list=Delivery::paginate(5);
        return view ('backend.delivery.list',compact('list'));
    }
    public function store(Request $request)
    {

        $deliverys = new Delivery();
        $deliverys->name = $request->name;
        $deliverys->phone_number = $request->phone_number;
        $deliverys->email = $request->email;
        $deliverys->password = $request->password;



        $deliverys->save();
        return redirect()->back()->with('message','employee added sucessfully');

   }

}
