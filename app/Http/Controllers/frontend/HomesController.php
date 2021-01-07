<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class HomesController extends Controller
{
    public function list()
    {
        $category = Category::paginate(10);
        $list=Item::paginate(12);
        return view ('frontend.layouts.home',compact('list','category'));
    }
    public function allView($id)
    {
        $items= Item::where('category_id',$id)->get();
        return view ('frontend.category.view',compact('items'));
    }
}
