<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Items;


class ItemsController extends Controller
{
    public function view($id)
    {

        $item = Item::find($id);
        return view ('frontend.item.view', compact('item'));
    }
    public function cart()
    {
        // session()->forget('cart');
        // dd(session('cart'));
        return view ('frontend.item.cart', [
            'cartData' => session('cart') ?? []
        ]);
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->back();
    }

    public function addTocart($id)
    {

        $item = Items::find($id);
            $cartData = session('cart');

            // if cart is empty then this the first product
            if (!isset($cartData[$id])) {
                $cartData[$id] = [
                    'id'=>$id,
                    "quantity" => 1,
                    'name'=>$item->name,
                    "price" => $item->price,
                    'sub_total'=>  $item->price * 1,
                ];

                session()->put('cart', $cartData);
                return redirect()->route('frontend.item.cart')->with('msg', 'Item add successfully');
            } else {

             $cartData[$id]["quantity"] =$cartData[$id]['quantity'] + 1;
             $cartData[$id]["sub_total"] =$cartData[$id]['quantity'] * $item->price;

                session()->put('cart', $cartData);
                return redirect()->route('frontend.item.cart')->with('msg', 'Item updated successfully.');
            }

    }

    public function update(Request $request)
    {

        $id = $request->id;
        $cart = session()->get('cart');
        $cart[$id]['quantity'] = $request->quantity;
        $cart[$id]['sub_total'] = $cart[$id]['price']  * $cart[$id]['quantity'];
        session()->put('cart',$cart);
        return redirect()->back()->with('message','item Update sucessfully');

     }

     public function show(){

        $carts = session('cart');

        $total = array_sum(array_column($carts,'sub_total'));

        $total_cart_item = count($carts);

         return view ('frontend.item.checkout',compact('carts','total_cart_item','total'));
     }

     public function checkout(Request $request,$id)
    {
        $item = Items::find($id);
       $item->name = $request->name;
       $item->price = $request->price;
       $total_cart_item = count($item);
       return view ('frontend.cart', compact('item','total_cart_item'));
     }


 public function delete($id)
 {
    $cart = session('cart');
    unset($cart[$id]);
    session()->put('cart',$cart);
    return redirect()->back()->with('message','item delete sucessfully');

 }




}
