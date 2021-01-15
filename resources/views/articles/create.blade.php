@extends('layouts.app')

@section('content')
    <div class="card mb-3" style="width: 60%; margin-left: 20%">
        <div class="card-header">
            <h2 style="margin-left: 2%; margin-bottom: 0">Add a new topic</h2>
        </div>
        <form action="{{route('articles.store') }}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="form-group" style="margin-left: 5%; margin-right: 5%;margin-top: 2%;margin-bottom: 3%">
                <label for="title" class="col-md-4 col-form-label">Topic</label>

                <input id="title"
                       type="text"
                       class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                       name="title"
                       value="{{ old('title') }}"
                       autocomplete="title" autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                @endif

                <label for="text" class="col-md-4 col-form-label">Text</label>
                <textarea class="form-control" id="text" name="text" style="resize: none; height: 200px"></textarea>

            </div>

            <div class="row" style="margin-left: 5%; margin-right: 5%;margin-top: 2%;margin-bottom: 3%">
                <label for="image" class="col-md-4 col-form-label">Image</label>

                <input type="file" class="form-control-file" id="image" name="image">

                @if ($errors->has('image'))
                    <strong>{{ $errors->first('image') }}</strong>
                @endif


            </div>
            <button class="btn btn-primary" style="width: 100%">Send</button>



        </form>
    </div>
@endsection
