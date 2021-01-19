<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
@extends('layouts.app')

@section('content')

    <div class="card mb-3 profileCard">
        <div class="card-header">
            <h2 class="profileCardHeader">List of users</h2>
        </div>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif

        {!! $grid->show() !!}

        <a class="btn btn-primary" href="{{ route('user.create') }}" role="button" style="width: 100%">Create new user</a>

    </div>

@endsection
