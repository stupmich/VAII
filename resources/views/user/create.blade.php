<!DOCTYPE html>
@extends('layouts.app')

@section('content')

    <div class="card mb-3" style="width: 60%; margin-left: 20%">
        <div class="card-header">
            <h2 style="margin-left: 2%; margin-bottom: 0">Edit profile</h2>
        </div>

        <div class="form-group text-danger" style="margin-left: 5%">
            @foreach($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        </div>

        <form method="post" action="{{$action}} ">
            @csrf
            @method($method)
            <div class="form-group formMargin">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                <label>Username</label>
                <input name="name" type="text" class="form-control" value="{{old('name',@$model->name)}}" required style="margin-bottom: 1%">

                <label>Password</label>
                <input name="password" type="password" class="form-control" value="" required style="margin-bottom: 1%">

                <label>Password again</label>
                <input name="password_confirmation" type="password" class="form-control" value="" required style="margin-bottom: 1%">


                <label>Email address</label>
                <input name="email" type="email" class="form-control" value="{{old('email',@$model->email)}}" required style="margin-bottom: 1%">

                <label>Faction</label>
                <select name="faction" class="select form-control" required id="faction" style="margin-bottom: 1%">
                    <option disabled selected value="">Choose...</option>
                    <option value="Alliance">
                        Alliance
                    </option>
                    <option value="Horde">Horde
                    </option>
                </select>

                <label>Realm</label>
                <select name="realm" class="select form-control" required id="id_realm" style="margin-bottom: 1%">
                    <option disabled selected value="">Choose...</option>
                    <optgroup label="en">
                        <option
                            value="EN-PvE Mirage Raceway">
                            EN-PvE Mirage Raceway
                        </option>
                        <option
                            value="EN-PvE Nethergarde Keep">
                            EN-PvE Nethergarde Keep
                        </option>
                        <option
                            value="EN-PvE Pyrewood Village">
                            EN-PvE Pyrewood Village
                        </option>
                        <option
                            value="EN-PvP Ashbringer">
                            EN-PvP Ashbringer
                        </option>
                        <option
                            value="EN-PvP Dreadmist">
                            EN-PvP Dreadmist
                        </option>
                        <option
                            value="EN-PvP Gehennas">
                            EN-PvP Gehennas
                        </option>
                        <option
                            value="EN-PvP Golemagg">
                            EN-PvP Golemagg
                        </option>
                        <option
                            value="EN-PvP Shazzrah">
                            EN-PvP Shazzrah
                        </option>
                        <option
                            value="EN-PvP Skullflame">
                            EN-PvP Skullflame
                        </option>
                    </optgroup>
                    <optgroup label="fr">
                        <option
                            value="FR-PvE Auberdine">
                            FR-PvE Auberdine
                        </option>
                        <option
                            value="FR-PvP Amnennar">
                            FR-PvP Amnennar
                        </option>
                        <option
                            value="FR-PvP Finkle">
                            FR-PvP Finkle
                        </option>
                        <option
                            value="FR-PvP Sulfuron">
                            FR-PvP Sulfuron
                        </option>
                    </optgroup>
                    <optgroup label="de">
                        <option
                            value="DE-PvE Everlook">
                            DE-PvE Everlook
                        </option>
                        <option
                            value="DE-PvE Lakeshire">
                            DE-PvE Lakeshire
                        </option>
                        <option
                            value="DE-PvE Razorfen">
                            DE-PvE Razorfen
                        </option>
                    </optgroup>
                    <optgroup label="oc">
                        <option
                            value="OC-PvE Remulos">
                            OC-PvE Remulos
                        </option>
                        <option
                            value="OC-PvP Arugal">
                            OC-PvP Arugal
                        </option>
                        <option
                            value="OC-PvP Felstriker">
                            OC-PvP Felstriker
                        </option>
                        <option
                            value="OC-PvP Yojamba">
                            OC-PvP Yojamba
                        </option>
                    </optgroup>

                    <optgroup label="us-east">
                        <option
                            value="US-East-PvE Ashkandi">
                            US-East-PvE Ashkandi
                        </option>
                        <option
                            value="US-East-PvE Mankrik">
                            US-East-PvE Mankrik
                        </option>
                        <option
                            value="US-East-PvE Pagle">
                            US-East-PvE Pagle
                        </option>
                        <option
                            value="US-East-PvE Westfall">
                            US-East-PvE Westfall
                        </option>


                    </optgroup>
                    <optgroup label="us-pacific">
                        <option
                            value="US-Pacific-PvE Atiesh">
                            US-Pacific-PvE Atiesh
                        </option>
                        <option
                            value="US-Pacific-PvE Azuresong">
                            US-Pacific-PvE Azuresong
                        </option>
                        <option
                            value="US-Pacific-PvE Myzrael">
                            US-Pacific-PvE Myzrael
                        </option>
                        <option
                            value="US-Pacific-PvE Old Blanchy">
                            US-Pacific-PvE Old Blanchy
                        </option>
                    </optgroup>
                </select>

                <label>About</label>
                <textarea name="about" class="form-control" value="{{old('about',@$model->about)}}" style="margin-bottom: 1%"></textarea>

                <button type="submit" class="btn btn-primary" style="width: 100%">Create new user</button>

            </div>

        </form>

    </div>

@endsection
