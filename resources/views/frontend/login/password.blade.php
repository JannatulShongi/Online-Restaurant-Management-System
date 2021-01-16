@extends ('frontend.master')

@section('content')
@if(session('message'))
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="alert alert-success" role="alert" >{{ session('message') }}</div>
        </div>
    </div>

@endif


<div class="container">
    @if(session('message'))
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="alert alert-success" role="alert" >{{ session('message') }}</div>
        </div>
    </div>

@endif

<div class="row" style="display: flex;justify-content: center; padding:120px 0px">
    <div class="col-md-10">
        <form  action="{{ route('frontend.password',$user->id) }}" method="post">
            @if (count($errors))
            @foreach ($errors->all() as $error)
              <p class="alert alert-danger">{{$error}}</p>
            @endforeach
           @endif
            @csrf

            <div class="form-group">
                <label for="password"> Password</label>
                <input name="password"type="password"value=""class="form-control" id="password" >
            </div>
            <div class="form-group">
                <label for="newpassword">New Password</label>
                <input name="newpassword"type="password"value="" class="form-control" id="newpassword" >
            </div>




            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    </div>
</div>

  @endsection
