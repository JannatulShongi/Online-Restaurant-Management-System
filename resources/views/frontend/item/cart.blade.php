
@extends ('frontend.master')

@section('content')


<section id="cart_items" style="padding-top: 200px;">
<div class="container">
    @if(session('msg'))
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="alert alert-success" role="alert" >{{ session('msg') }}</div>
        </div>
    </div>

@endif

<div class="table-responsive cart_info">
<table class="table table-condensed">
<thead>
<tr class="cart_menu">
<td class="image">Item</td>
<td class="description"></td>
<td class="price">Price</td>
<td class="quantity">Quantity</td>
<td class="total">Total</td>

<td></td>
</tr>
</thead>
<tbody>

@if($cartData)
@foreach($cartData as $key=>$cart)
<tr>
<td class="cart_product">
<a href=""><img src="images/cart/one.png" alt=""></a>
</td>
<td class="cart_description">
<h4><a href="">{{$cart['name']  }}</a></h4>
<p>Web ID: 1089772</p>
</td>
<td class="cart_price">
<p>{{$cart['price']  }}BDT</p>
</td>



<form action="{{route('addtocart',$key)}}" method="post">
    @csrf
    @method('put')
    <td class="cart_quantity">
        <span class="cart_quantity_button">
            <input style="width: 40px" class="cart_quantity_input" type="hidden" name="id" value="{{ $key }}" autocomplete="off" >
        <input style="width: 40px" class="cart_quantity_input" type="number" name="quantity" value="{{ $cart['quantity'] }}" autocomplete="off" >
        <button type="submit" class="btn btn-primary">Update</button>
        </span>
        <span class="text-center">
            <a href="{{ route('addtocart.delete',$key) }}" class="btn btn-primary"> Delete</a>
            </span>
</td>




<td class="cart_total">
<p class="cart_total_price">{{ $cart['price']* $cart['quantity']  }} BDT</p>
</td>


</form>

@endforeach
@endif
</tbody>


</table>
<a class="btn btn-success" style="float:right" href="{{ route('frontend.item.checkout') }}">Check Out</a>
<a class="btn btn-success" style="float:right" href="{{ route('cart.clear') }}">clear</a>

</div>




</div>

</section> <!--/#cart_items-->

@endsection
