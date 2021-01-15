@extends('layouts.app')

@section('content')
    <div id="container3">
        <div class="card mb-3" style="max-width: 90%; margin-left: 5%">
            <div class="row g-0">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 padding-bottomPictures">
                    <img alt=""
                         src="https://d1bg94bbsh66ji.cloudfront.net/en/wow/plugins/discourse-blizzard-themes/images/icons/wow-helmet.png?1530125097"
                         style="width: 100px;margin-left: 30%;margin-right: 30%;margin-top: 10%;">
                </div>

                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
                    <div class="card-body">
                        <h5 class="card-title">COMMUNITY</h5>
                        <p class="card-text">Discuss World of Warcraft.</p>
                        <a href="{{ route('articles.topics') }}" class="text-decoration-none" id='link-topics'>General discussion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

