
{{-- @extends ('frontend.master')
@section('content') --}}

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('frontend/css/profile.css') }}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{ url('uploads/user/'.$user->image) }}" style="    width: 250px;
                        height: 250px">


                            <div class="file btn  b   btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{ $user->name }}
                                    </h5>
                                    <h6>

                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="password-tab" data-toggle="tab" href="{{ route('frontend.login.password',$user->id) }}" role="tab" aria-controls="password" aria-selected="true">Password</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-primary" href="{{ route('frontend.login.edit',$user->id,) }}">Edit</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">



                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Name</label>
                                            </div>
                                            <div class="col-md-6">
                                               <p> {{ $user->name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Email </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->email}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->mobile}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->address}}</p>
                                            </div>
                                        </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table">

                            <thead>
                            <tr>
                                <th scope="col">serial</th>
                                <th scope="col"> First Name</th>
                                <th scope="col"> Last Name</th>
                                <th scope="col"> Mobile</th>

                                <th scope="col"> User Name</th>
                                <th scope="col"> Total Payable</th>
                                <th scope="col"> Status</th>
                                <th scope="col"> comment</th>


                                <th class="text text-center"scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                @foreach($show as $key=>$dat)

                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$dat->first_name}}</td>
                                <td>{{$dat->last_name}}</td>
                                <td>{{$dat->mobile}}</td>
                                <td>{{$dat->user->name}}</td>
                                <td>{{$dat->total_payable}}</td>
                                <td>{{$dat->status}}</td>
                                <td>

                                <form action="{{ route('frontend.comment',$dat->id) }}" method="POST" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="comment"></label>
                                        <input name="comment"type="text" value="{{$dat->comment}}" class="form-control" id="comment" >
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                 </form>

                                </td>







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
            </div>
        </div>
        {{-- @endsection --}}
