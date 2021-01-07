<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class CategoryController extends Controller
{
    public function create()
    {
        $item=Item::where('category_id');
        return view ('backend.category.create',compact('item'));
    }
    public function list()
    {

        $list=Category::paginate(5);
        return view ('backend.category.list',compact('list'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cat_name'=>'required',
            'food_number'=>'required',

         ]);


          $products = new Category();
          $products->name = $request->cat_name;
          $products->food_no = $request->food_number;



          $products->save();
          return redirect()->back()->with('message','Product added sucessfully');

     }
 public function edit($id){

    $category = Category::find($id);

    return view ('backend.category.edit',compact('category'));
 }

 public function update(Request $request,$id)
 {
    // $request->validate([
    //     'name'=>'required',
    //     'food_no'=>'required',

    //  ]);


       $products =  Category::find($id);
       $products->name = $request->cat_name;
       $products->food_no = $request->food_number;



       $products->save();
       return redirect()->back()->with('message','category Update sucessfully');

  }
  public function delete($id){
   // dd('ok');

    Category::find($id)->delete();

    return redirect(route('backend.category.list'))->with('msg','Delete Successfully.');
  }

  public function view($id){

    $category = Category::find($id);

    return view ('backend.category.view',compact('category'));
  }

  public function allView(){

    $category  = Category::all();

    return redirect('frontend.category.view',compact('category'));
  }

}
