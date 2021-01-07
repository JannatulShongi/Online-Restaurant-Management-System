ddd
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
        <h1>Delivery Man Form</h1>
        <form  action="{{ route('delivery.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name"> Name</label>
                <input name="name"type="text" class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input name="phone_number"type="number" class="form-control" id="phone_number" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email"type="email" class="form-control" id="email" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password"type="password" class="form-control" id="password" >
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
  @endsection
