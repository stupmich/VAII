@extends('layouts.app')

@section('content')
    <div id="container3">
        <div class="row">
            <img
                src="https://d1bg94bbsh66ji.cloudfront.net/en/wow/plugins/discourse-blizzard-themes/images/logos/wow/logo-small-wow.png"
                width="50" height="50" class="d-inline-block" alt="" loading="lazy" style="margin-left: 30px">
            <h2 id="categories" class="forumHeader">ALL CATEGORIES</h2>
        </div>

        <div class="card mb-3" style="max-width: 90%; margin-left: 5%">
            <div class="row g-0">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 padding-bottomPictures">
                    <img alt=""
                         src="https://d1bg94bbsh66ji.cloudfront.net/en/wow/plugins/discourse-blizzard-themes/images/icons/wow-helmet.png?1530125097"
                         style="width: 100px;margin-left: 30%;margin-right: 30%;margin-top: 10%;">
                </div>

                <div class="card-body">
                    <h5 class="card-title">COMMUNITY</h5>
                    <p class="card-text">Discuss World of Warcraft.</p>
                    <a href="{{ route('articles.topics',['category' => 'Community', 'subcategory' => 'General-discussion' ]) }}"
                       class="text-decoration-none" id='link-topics' style=" display: inline-block;margin-right: 5%">General
                        discussion</a>
                    <a href="{{ route('articles.topics',['category' => 'Community', 'subcategory' => 'Events-and-fan-creations' ]) }}"
                       class="text-decoration-none" id='link-topics' style=" display: inline-block;margin-right: 5%">Events
                        and fan creations</a>
                </div>

            </div>
            </div>

            <div class="card mb-3" style="max-width: 90%; margin-left: 5%">
                <div class="row g-0">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 padding-bottomPictures">
                        <img alt=""
                             src="https://d1bg94bbsh66ji.cloudfront.net/en/wow/plugins/discourse-blizzard-themes/images/icons/wow-quests.png?1530125097"
                             style="width: 100px;margin-left: 30%;margin-right: 30%;margin-top: 10%;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">GAMEPLAY</h5>
                        <p class="card-text">Gameplay discussion for World of Warcraft.</p>
                        <a href="{{ route('articles.topics',['category' => 'Gameplay', 'subcategory' => 'Quests-achievements' ]) }}"
                           class="text-decoration-none" id='link-topics'
                           style=" display: inline-block;margin-right: 5%">Quests & achievements</a>
                        <a href="{{ route('articles.topics',['category' => 'Gameplay', 'subcategory' => 'Dungeons-raids' ]) }}"
                           class="text-decoration-none" id='link-topics'
                           style=" display: inline-block;margin-right: 5%">Dungeons & raids</a>
                        <a href="{{ route('articles.topics',['category' => 'Gameplay', 'subcategory' => 'Professions' ]) }}"
                           class="text-decoration-none" id='link-topics'
                           style=" display: inline-block;margin-right: 5%">Professions</a>
                        <a href="{{ route('articles.topics',['category' => 'Gameplay', 'subcategory' => 'Transmogrification' ]) }}"
                           class="text-decoration-none" id='link-topics'
                           style=" display: inline-block;margin-right: 5%">Transmogrification</a>
                    </div>

                </div>
            </div>


    <div class="card mb-3" style="max-width: 90%; margin-left: 5%">
        <div class="row g-0">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 padding-bottomPictures">
                <img alt=""
                     src="https://d1bg94bbsh66ji.cloudfront.net/en/wow/plugins/discourse-blizzard-themes/images/icons/wow-pvp.png?1530125097"
                     style="width: 100px;margin-left: 30%;margin-right: 30%;margin-top: 10%;">
            </div>
            <div class="card-body">
                <h5 class="card-title">PVP</h5>
                <p class="card-text">Discuss Arenas and Battleground here with your fellow players.</p>
                <a href="{{ route('articles.topics',['category' => 'PVP', 'subcategory' => 'Arenas' ]) }}"
                   class="text-decoration-none" id='link-topics'
                   style=" display: inline-block;margin-right: 5%">Arenas</a>
                <a href="{{ route('articles.topics',['category' => 'PVP', 'subcategory' => 'Battlegrounds' ]) }}"
                   class="text-decoration-none" id='link-topics'
                   style=" display: inline-block;margin-right: 5%">Battlegrounds</a>
                <a href="{{ route('articles.topics',['category' => 'PVP', 'subcategory' => 'War-Mode-and-World-PvP' ]) }}"
                   class="text-decoration-none" id='link-topics'
                   style=" display: inline-block;margin-right: 5%">War Mode and World PvP</a>
            </div>

        </div>
    </div>

        <div class="card mb-3" style="max-width: 90%; margin-left: 5%">
            <div class="row g-0">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 padding-bottomPictures">
                    <img alt=""
                         src="https://d1bg94bbsh66ji.cloudfront.net/en/wow/plugins/discourse-blizzard-themes/images/icons/wow-support.png?1530125097"
                         style="width: 100px;margin-left: 30%;margin-right: 30%;margin-top: 10%;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">SUPPORT</h5>
                    <p class="card-text">Problem installing? In-game or account issues? Come and join us here in Support.</p>
                    <a href="{{ route('articles.topics',['category' => 'Support', 'subcategory' => 'Customer-Support' ]) }}"
                       class="text-decoration-none" id='link-topics'
                       style=" display: inline-block;margin-right: 5%">Customer Support</a>
                    <a href="{{ route('articles.topics',['category' => 'Support', 'subcategory' => 'Technical-Support' ]) }}"
                       class="text-decoration-none" id='link-topics'
                       style=" display: inline-block;margin-right: 5%">Technical Support</a>
                </div>

            </div>
        </div>
    </div>

@endsection

