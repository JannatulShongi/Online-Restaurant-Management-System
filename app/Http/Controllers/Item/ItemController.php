<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()

    {

        $item = Category::all();
        return view ('backend.item.create',compact('item'));
    }
    public function list()
    {
        $list=Item::with('category')->paginate(10);

        return view ('backend.item.list',compact('list'));
    }

    public function store(Request $request)
    {
         $request->validate([
            'name'=>'required',
            'price'=>'required',
            'details'=>'required',
            'category_id'=>'required',
         ]);


          $products = new Item();
          $products->name = $request->name;
          $products->price = $request->price;
          $products->details = $request->details;
          $products->category_id = $request->category_id;



          $products->save();
          return redirect()->back()->with('message','item added sucessfully');

     }

     public function edit($id){
         $item=Item::find($id);
         $category = Category::all();
         return view ('backend.item.edit',compact('item','category'));
     }

     public function update(Request $request,$id){


        // $request->validate([
        //     'name'=>'required',
        //     'price'=>'required',
        //     'details'=>'required',
        //     'category_id'=>'required',
        //  ]);


        $products = Item::find($id);
        $products->name= $request->name;
        $products->food_category = $request->food_category;
        $products->price= $request->price;
        $products->details= $request->details;



        $products->save();
        return redirect()->back()->with('message','Product Update sucessfully');

     }
     public function delete($id){
     // dd('ok');

         Item::find($id)->delete();

         return redirect(route('backend.item.list'))->with('msg','Delete Successfully.');
       }

       public function view($id){

        $item = Item::find($id);

        return view ('backend.item.view',compact('item'));
      }

}
