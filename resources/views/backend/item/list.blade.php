
@extends ('master')

@section('content')
    <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Item List</h1>
                <table class="table">

                    <thead>
                    <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> name</th>
                        <th scope="col"> food_category</th>
                        <th scope="col"> price</th>
                        <th scope="col"> details</th>
                        <th scope="col"> image</th>

                        <th class="text text-center"scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
        @foreach($list as $key=>$data)

                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->category->name}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->details}}</td>
                        <td>{{$data->image}}   </td>
                        



                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('backend.item.edit',$data->id,) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('delete',$data->id) }}">Delete</a>
        {{--                    <a class="btn btn-warning" href="">View</a>--}}
                            <a class="btn btn-success" href="{{ route('view',$data->id) }}">View</a>

                        </td>
                    </tr>
        @endforeach
                    </tbody>



                </table>
                {{$list->links()}}
            </div>

            </div>
    @endsection
