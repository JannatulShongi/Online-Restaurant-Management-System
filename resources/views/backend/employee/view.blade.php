@extends ('master')

@section('content')
<div class="container">

    <h2>Employee View</h2>

<p>

<label for=""> Nane:{{ $employees->name }}</label>
</p>

<p>

    <label for="">phone Number:{{ $employees->phone_number }}</label>
    </p>
    <p>

        <label for="">Email:{{ $employees->email }}</label>
        </p>
        <p>

            <label for="">password:{{ $employees->password }}</label>
            </p>
</div>

@endsection
