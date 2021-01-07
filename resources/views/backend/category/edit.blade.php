
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
    <form  action="{{ route('category.update',$category->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>

                <input name="cat_name"type="text" value="{{ $category->name }}" class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="name">Food</label>
                <input name="food_number"type="text" value="{{ $category->food_no }}"class="form-control" id="name" >
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    </div>
  @endsection
