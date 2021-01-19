<!DOCTYPE html>
@extends('layouts.app')


@section('content')

    <div class="card mb-3 profileCard" >
        <div class="card-header">
            <h2 class="profileCardHeader">My profile</h2>
        </div>

        <div class="row no-gutters">
            <div class="col-md-3">
                <img src="{{$user->avatar}}" class="card-img" alt="..." style="padding-left: 10%">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h3 class="card-title">{{$user->name}}</h3>
                    <h5 class="card-title">Faction: {{$user->faction}}</h5>
                    <h6 class="card-title">Realm: {{$user->realm}}</h6>
                    <p class="card-text">{{$user->about}}</p>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" href="{{ route('user.editProfile') }}" role="button" style="width: 100%">Edit my profile</a>

    </div>

@endsection
