@extends ('master')

@section('content')
    <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Report</h1>
                <table class="table">
                    <form  action="{{ route('report') }}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="date">Date From:</label>
                        <input name="date"type="date" value="" class="" id="date" >
                    </div>
                    <div class="form-group">
                        <label for="date1">Date To:</label>
                        <input name="date1"type="date" value="" class="align:right" id="date1" >
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                 </form>

                    <thead>
                    <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> First Name</th>
                        <th scope="col"> Last Name</th>
                        <th scope="col"> Mobile</th>

                        <th scope="col"> User Name</th>
                        <th scope="col"> Total Payable</th>
                        <th scope="col"> Status</th>


                        <th class="text text-center"scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
        @foreach($report as $key=>$dat)

                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$dat->first_name}}</td>
                        <td>{{$dat->last_name}}</td>
                        <td>{{$dat->mobile}}</td>
                        <td>{{$dat->user->name}}</td>
                        <td>{{$dat->total_payable}}</td>
                        <td>{{$dat->status}}</td>







                        <td class="text-center">
                            <a class="btn btn-primary" href="">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
        {{--                    <a class="btn btn-warning" href="">View</a>--}}
                            <a class="btn btn-success" href="">View</a>
                            <a class="btn btn-success" href="">Invoice</a>
                        </td>
                    </tr>
        @endforeach
                    </tbody>



                </table>

            </div>

            </div>
    @endsection
