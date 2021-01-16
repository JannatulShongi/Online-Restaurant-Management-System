
@extends ('master')

@section('content')
    <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Support</h1>

                <table class="table">

                    <thead>
                    <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> Form user</th>
                        <th scope="col"> To user</th>
                        <th scope="col"> Message</th>
                        <th scope="col"> Is seen</th>


                        <th class="text text-center"scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>


        @foreach($categories as $key=>$dat)

                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$dat->userFrom->name}}</td>
                        <td>{{$dat->userTo->name}}</td>
                        <td>{{$dat->message}}</td>
                        <td>{{$dat->is_seen}}</td>




                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('backend.support.reply',$dat->id) }}">reply</a>


                        </td>
                    </tr>
        @endforeach
                    </tbody>



                </table>

            </div>

            </div>
    @endsection --}}
