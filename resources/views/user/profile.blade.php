@extends('layouts.app')


@section('content')
    <div id="container3" style="padding:2%;">

    <div class="card mb-3" style="width: 80%; margin-left: 5%">
        <h1 style="margin-left: 5%">My account</h1>
        <div class="row no-gutters">
            <div class="col-md-3">
                <img src="profDefault.png" class="card-img" alt="...">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h4 class="card-title">{{$user->name}}</h4>
                    <h5 class="card-title">Faction: {{$user->faction}}</h5>
                    <h6 class="card-title">Realm: {{$user->realm}}</h6>
                    <p class="card-text">{{$user->about}}</p>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" href="{{ route('user.editProfile') }}" role="button" style="margin-left: 5%; width: fit-content">Edit my profile</a>

    </div>

    </div>
@endsection
