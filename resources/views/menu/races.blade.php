<!DOCTYPE html>
@extends('layouts.app')


@section('content')

<div id="container3">
    <div class="container-fluid padding">
        <div class="col-12 text-center" style="padding-bottom: 3%">
            <h1><strong>Denizens of Azeroth</strong></h1>
        </div>

        <div class="col-12 text-center" style="padding-bottom: 3%">
            <p style="padding-bottom:3% ">Azeroth is home to a large variety of races, some native to its lands and some hailing from other realms.
                Whether as a stalwart defender of the Alliance or a fierce guardian of the Horde, deciding which race to play will define who you'll fight for in this neverending war.
                Where do your loyalties lie?
            </p>

            <h2><strong>For the Alliance</strong></h2>
            <img class="alliance" src="alliance.png" alt="">
        </div>
    </div>


    <div class="container-fluid padding">
        <div class="row text-center padding-bottom:5%">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="human" src="human.png" alt="">
                <h4>Human</h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="dwarf" src="dwarf.png" alt="">
                <h4>Dwarf</h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="Nightelf" src="nightelf.png" alt="">
                <h4>Night elf</h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="Gnome" src="gnome.png" alt="">
                <h4>Gnome</h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="Draenei" src="draenei.png" alt="">
                <h4>Draenei</h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="Worgen" src="worgen.png" alt="">
                <h4>Worgen</h4>
            </div>

        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row text-center padding">

            <div class="col-12 align-center">
                <h2><strong>For the Horde</strong></h2>
                <img class="horde" src="horde.png" alt="" style="padding-bottom: 6%; padding-top: 3%">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="orc" src="orc.png" alt="">
                <h4>Orc</h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="undead" src="undead.png" alt="">
                <h4>Undead</h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="tauren" src="tauren.png" alt="">
                <h4>Tauren</h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="troll" src="troll.png" alt="">
                <h4>Troll</h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="belf" src="elf.png" alt="">
                <h4>Blood elf</h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xlg-2 padding-bottomPictures">
                <img class="goblin" src="gobling.png" alt="">
                <h4>Goblin</h4>
            </div>
        </div>
    </div>
@endsection
