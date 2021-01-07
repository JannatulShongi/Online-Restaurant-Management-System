<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class CategoriesController extends Controller
{
    public function view($id)
    {

        $item= Item::find($id);

        return view ('frontend.category.view', compact('item'));
    }
}
