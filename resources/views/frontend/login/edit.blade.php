@extends ('frontend.master')
@section('content')

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
        <form  action="{{ route('frontend.update',$user->id) }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name"> User Name</label>
                <input name="name"type="text"value="{{ $user->name }} "class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email"type="email"value="{{ $user->email }}" class="form-control" id="email" >
            </div>
            <div class="form-group">
                <label for="mobile">Phone Number</label>
                <input name="mobile"type="mobile"value="{{ $user->mobile }}" class="form-control" id="mobile" >
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input name="address"type="trxt" value="{{ $user->address }}"class="form-control" id="address" >
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input name="image"type="file" value="{{ $user->image }}"class="form-control" id="image" >
            </div>



            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    </div>
</div>

  @endsection
