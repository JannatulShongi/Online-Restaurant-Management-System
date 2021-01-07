@extends ('master')

@section('content')
    <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Customer List</h1>
                <table class="table">

                    <thead>
                    <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> Name</th>
                        <th scope="col"> Phone Number</th>
                        <th scope="col"> Email</th>
                        <th scope="col"> Address</th>
                        <th scope="col"> Password</th>

                        <th class="text text-center"scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
        @foreach($page as $key=>$dat)

                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$dat->name}}</td>
                        <td>{{$dat->phone_number}}</td>
                        <td>{{$dat->email}}</td>
                        <td>{{$dat->address}}</td>
                        <td>{{$dat->password}}</td>



                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('backend.customer.edit',$dat->id) }}">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
        {{--                    <a class="btn btn-warning" href="">View</a>--}}
                            <a class="btn btn-success" href="">View</a>

                        </td>
                    </tr>
        @endforeach
                    </tbody>



                </table>
                {{$page->links()}}
            </div>

            </div>
    @endsection

