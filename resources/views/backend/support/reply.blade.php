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
        <h1></h1>
        <form  action="{{ route('backend.support.send') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $id }}" name="message_id">
            <div class="form-group">
                <label for="message">message</label>
                <input name="message"type="text" class="form-control" id="message" >
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

    </div>
  @endsection

