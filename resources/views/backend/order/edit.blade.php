@extends ('master')
@section('content')
@if(session('message'))
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="alert alert-success" role="alert" >{{ session('message') }}</div>
        </div>
    </div>

@endif

<div class="row justify-content-center">
    <div class="col-md-10">
        <form  action="{{ route('backend.update',$order->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input readonly name="first_name"type="text" value="{{ $order->first_name }}" class="form-control" id="first_name" >
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input readonly name="last_name" type="text"  value="{{ $order->last_name }}" class="form-control" id="last_name" >
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input readonly name="mobile"type="text"  value="{{ $order->mobile }}" class="form-control" id="mobile" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input readonly name="email"type="text"  value="{{ $order->email }}" class="form-control" id="email" >
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input readonly name="address"type="text"  value="{{ $order->address }}" class="form-control" id="address" >
            </div>
            <div class="form-group">
                <label for="user_id">User Id</label>
                <input readonly name="user_id"type="text"  value="{{ $order->user_id }}" class="form-control" id="user_id" >
            </div>
            <div class="form-group">
                <label for="total_payable">Total payable</label>
                <input readonly name="total_payable"type="text"  value="{{ $order->total_payable }}" class="form-control" id="total_payable" >
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                {{-- <input name="status"type="text"  value="{{ $order->status }}" class="form-control" id="status" > --}}


                <select name="status" id="status"class="form-control">

                    {{-- @foreach ($order  as $cat ) --}}
                    <option @if($order->status=='pending') selected @endif value="pending">pending</option>
                    <option @if($order->status=='delivered') selected @endif value="delivered">delivered</option>
                    <option @if($order->status=='dispatch') selected @endif value="dispatch">dispatch</option>
                    {{-- @endforeach --}}
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    </div>
  @endsection

