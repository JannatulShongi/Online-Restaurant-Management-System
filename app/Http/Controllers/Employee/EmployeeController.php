<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(){
        return view ('backend.employee.create');
    }
    public function list(){
        $list=Employee::paginate(5);
        return view ('backend.employee.list',compact('list'));
    }

    public function store(Request $request)
    {



          $Employees = new Employee();
          $Employees->name = $request->name;
          $Employees->phone_number = $request->phone_number;
          $Employees->email = $request->email;
          $Employees->password = $request->password;



          $Employees->save();
          return redirect()->back()->with('message','employee added sucessfully');

     }
     public function edit($id){
       $employee= Employee::find ($id);
       return view ('backend.employee.edit',compact('employee'));
     }

     public function update(Request $request,$id){
      $Employees =Employee::find($id);
      $Employees ->name =$request->name;
      $Employees->phone_number=$request->phone_number;
      $Employees->email=$request->email;
      $Employees->password=$request->password;


      $Employees->save();
        return redirect()->back()->with('message','employee Update sucessfully');
     }
     public function delete($id)
     {
        Employee::find($id)->delete();
         return redirect(route('backend.employee.list'))->with ('msg','delete successfully');
     }
     public function view($id){
       $employees=Employee::find($id);
       return view ('backend.employee.view',compact('employees'));
     } 


}
