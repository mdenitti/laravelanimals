@extends('main')
@section('content')

<div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Aliens</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        
                                    

    @foreach ($aliens as $alien)



        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{$alien->name}}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{$alien->email}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Location</p>
                                                <p class="text-xs text-secondary mb-0">{{$alien->location}}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Online</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{$alien->date}}</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>




      
    @endforeach

  
                                    </tbody>
                                    <tr> {{ $aliens->links() }} </tr>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection

@section('title')
    <h3>The Aliens are already here... and in the white house</h3>
@endsection

@section('subtitle')
    They are coming to get you, Barbara
@endsection

@section('userinfo')
<b>Userinfo: </b>
{{$user->name}}
@endsection

