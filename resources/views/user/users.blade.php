<!DOCTYPE html>
@extends('layouts.app')

@section('content')

    <div class="card mb-3" style="width: 60%; margin-left: 20%">
        <div class="card-header">
            <h2 style="margin-left: 2%; margin-bottom: 0">List of users</h2>
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
