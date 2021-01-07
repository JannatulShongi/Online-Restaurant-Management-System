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

                    </ul>
                </div>
    </form>
</div >













@endsection


