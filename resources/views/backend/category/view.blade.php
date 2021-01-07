@extends ('master')

@section('content')
<div class="container">

    <h2>Category View</h2>

<p>

<label for="">Category Nane:{{ $category->name }}</label>
</p>

<p>

    <label for="">Category Number:{{ $category->food_no }}</label>
    </p>
</div>

@endsection
