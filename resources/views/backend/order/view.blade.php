

 @extends ('master')

 @section('content')
     <div class="row justify-content-center">
             <div class="col-md-10">
                 <h1>Order Details</h1>
                 <table class="table">

                     <thead>
                     <tr>
                         <th scope="col">serial</th>
                         <th scope="col"> Order Id</th>
                         <th scope="col"> Item Id</th>
                         <th scope="col"> Quantity</th>
                         <th scope="col"> Price</th>
                         <th scope="col"> Sub_total</th>


                     </tr>
                     </thead>
                     <tbody>
                        @foreach ($order->Details as $key=>$dat )
                        <tr>

                            <th scope="row">{{$key+1}}</th>
                            <td>{{$dat->order_id}}</td>
                            <td>{{$dat->item_id}}</td>
                            <td>{{$dat->quantity}}</td>
                            <td>{{$dat->price}}</td>
                            <td>{{$dat->sub_total}}</td>

                        </tr>

                        @endforeach

                     </tbody>



                 </table>

             </div>

             </div>
     @endsection
