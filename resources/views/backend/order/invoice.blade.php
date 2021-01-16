<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">{{ $order->id }}</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>From:</strong><br>
    					Shongi<br>
    					Uttara Dhaka<br>
    					Sector-10<br>
    					Road-11,float-45
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
                    <strong>To:</strong><br>

    					{{ $order->first_name }}<br>
                        {{ $order->last_name }}<br>
                        {{ $order->mobile}}<br>
                        {{ $order->address }}<br>
                        {{ $order->email }}<br>

    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>

    					Cash On Delivery
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					March 7, 2014<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
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
                                    @foreach ($order->details as $key=>$dat )
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
    		</div>
        </div>




    </div>
    <button type="submit" onclick="window.print()" class="btn btn-success btn-lg btn-block">Submit</button>
</div>
