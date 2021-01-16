<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Models\Order;

class ReportController extends Controller
{
    public function list(){
        $report=Order::paginate();
        // dd($page);
        return view ('backend.report.list',compact('report'));
    }
    public function store(Request $request){
        $report =new Report();
        $report ->first_name =$request->first_name;
        $report->last_name=$request->last_name;
        $report->mobile=$request->mobile;
        $report->user_name=$request->user_name;
        $report->total_payable=$request->total_payable;
        $report->status=$request->status;


        $report->save();
          return redirect()->back()->with('message',' add sucessfully');
       }
       public function report(Request $request){

           $report=Order::whereBetween('created_at',[$request->date,$request->date1])->get();
            //dd($report);
           return view ('backend.report.list',compact('report'));
       }

    }

