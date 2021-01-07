<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Orders;

class CustomerController extends Controller
{
    public function create(){

        $customer=Orders::where('orders');
        //dd($customer);
        return view ('backend.customer.create');
    }
    public function list(){
        $page=Customer::paginate(5);
        return view ('backend.customer.list',compact('page'));
    }
    public function store(Request $request){
        $customer = new Customer();
        $customer->name=$request->name;
        $customer->phone_number=$request->phone_number;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->password=$request->password;


        $customer->save();
        return redirect()->back()->with('msg','customer added successfully');
    }
    public function edit($id){
      $customer=Customer::find($id);
      return view ('backend.customer.edit',compact('customer')); 

    }
    public function update(Request $request,$id){
        $customer=Customer::find($id);
        $customer->name=$request->name;
        $customer->phone_number=$request->phone_number;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->password=$request->password;

        $customer->save();
        return redirect()->back()->with('message','customer Update sucessfully');


    }
}
