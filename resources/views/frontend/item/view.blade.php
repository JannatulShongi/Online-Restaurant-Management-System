@extends ('frontend.master')
@section('content')
<div class="container">
    <form class="row" style="padding-top: 120px;">



        <h2>Item View</h2>


                <div>
                    <ul>
                        <li>Item Name:{{ $item->name }}</li>
                        <li>Food Category:{{$item->food_category }}</li>


                        <li>Price:{{$item->price }}</li>
                        <li>Details:{{$item->details }}</li>
                        <img src="{{ url('uploads/products/'.$item->image) }}" style="    width: 250px;
                        height: 250px">
                    </ul>
                </div>

                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('frontend.item.addTocart',$item->id) }}"> Add To Cart</a>
                </div>
    </form>
</div >













@endsection


