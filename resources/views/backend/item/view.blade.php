@extends ('master')

@section('content')
<div class="container">

    <h2>Item View</h2>

<p>

<label for=""> Nane:{{ $item->name }}</label>
</p>

<p>

    <label for="">Category Number:{{ $item->food_category }}</label>
    </p>
    <p>

        <label for="">Price:{{ $item->price }}</label>
        </p>
        <p>

            <label for="">Details:{{ $item->details }}</label>
            </p>
</div>

@endsection
