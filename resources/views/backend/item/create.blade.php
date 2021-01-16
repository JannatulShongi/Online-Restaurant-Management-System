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
        <h1>Item Form</h1>
        <form  action="{{ route('backend.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Item Name</label>
                <input name="name"type="text" class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="food">Food Category</label>
                <select name="category_id" id="food"class="form-control">

                    @foreach ($item  as $cat )
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input name="price"type="text" class="form-control" id="price" >
            </div>
            <div class="form-group">
                <label for="details">Details</label>
                <input name="details"type="text" class="form-control" id="details" >
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input name="image" type="file" class="form-control" id="image" >
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
  @endsection
