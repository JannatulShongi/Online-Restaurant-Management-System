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
        <form  action="{{ route('customer.update',$customer->id) }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name"> Name</label>
                <input name="name"type="text"value="{{ $customer->name }} "class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input name="phone_number"type="number"value="{{ $customer->phone_number }}" class="form-control" id="phone_number" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email"type="email"value="{{ $customer->email }}" class="form-control" id="email" >
            </div>
            <div class="form-group">
                <label for="email">Address</label>
                <input name="address"type="trxt" value="{{ $customer->address }}"class="form-control" id="email" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password"type="password"value="{{ $customer->password }}" class="form-control" id="password" >
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
  @endsection

