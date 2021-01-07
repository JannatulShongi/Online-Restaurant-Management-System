@extends ('master')

@section('content')
    <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Registration list</h1>
                <table class="table">

                    <thead>
                    
                        <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> Name</th>

                        <th scope="col"> Mobile</th>
                        <th scope="col"> Email</th>
                        <th ></th>





                        <th class="text text-center"scope="col">Action</th>
                    </tr>

                    </thead>
                    <tbody>
        @foreach($list as $key=>$dat)


                        <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$dat->name}}</td>

                        <td>{{$dat->mobile}}</td>
                        <td>{{$dat->email}}</td>

                        <td>{{$dat->user_id}}</td>
                        <td></td>




                        <td class="text-center">
                            <a class="btn btn-primary" href="">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
        {{--                    <a class="btn btn-warning" href="">View</a>--}}
                            <a class="btn btn-success" href="">View</a>

                        </td>
                    </tr>

        @endforeach
                    </tbody>



                </table>

            </div>

            </div>
    @endsection


