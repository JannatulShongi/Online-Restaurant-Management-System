<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use App\Models\Orders;

class OrdersController extends Controller
{


        public function customer()
        {
            $order=Customer::where('customer_id');

        }


        public function order(Request $request){
//dd(array_sum(array_column(session('cart'),'sub_total')));

            //insert data into order table

            $order = new Orders();
            $order->first_name=$request->first_name;
            $order->last_name=$request->last_name;
            $order->mobile=$request->mobile;
            $order->email=$request->email;
            $order->address=$request->address;
            //$order->comment=$request->comment;

            //auth()->user()->id
            $order->user_id=auth()->user()->id;
            $order->total_payable=array_sum(array_column(session('cart'),'sub_total'));

            $order->save();


            //insert data into order_details

            $cart=session('cart');

            foreach($cart as $data)
            {

                OrderDetails::create([

                       'order_id'=>$data['id'],
                        'item_id'=>$data['id'],
                        'quantity'=>$data['quantity'],
                        'price'=>$data['price'],
                        'sub_total'=>$data['sub_total']
                ]);

            }





            return redirect()->back()->with('msg','order added successfully');


        }



}
