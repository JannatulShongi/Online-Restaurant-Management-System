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
        <form  action="{{ route('update',$item->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Item Name</label>
                <input name="name"type="text" value="{{ $item->name }}" class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="food">Food Category</label>
                {{-- <input name="food_category"type="text"  value="{{ $item->food_category }}" class="form-control" id="food" > --}}
                <select name="category_id" type="text" id="food"class="form-control">

                    @foreach ($category  as $cat )
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>


            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input name="price"type="text"  value="{{ $item->price }}" class="form-control" id="price" >
            </div>
            <div class="form-group">
                <label for="details">Details</label>
                <input name="details"type="text"  value="{{ $item->details }}" class="form-control" id="details" >
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    </div>
  @endsection
