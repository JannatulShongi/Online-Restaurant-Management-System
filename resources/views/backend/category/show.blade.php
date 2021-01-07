
@extends ('master')

@section('content')
<h2>Category:{{ $category->name }}</h2>
    <div class="row justify-content-center">
            <div class="col-md-10">

                <table class="table">

                    <thead>
                    <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> name</th>
                        <th scope="col"> price</th>
                        <th scope="col"> details</th>


                        
                    </tr>
                    </thead>
                    <tbody>
        @foreach($item as $key=>$data)

                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->details}}</td>






                    </tr>
        @endforeach
                    </tbody>



                </table>

            </div>

            </div>
    @endsection
