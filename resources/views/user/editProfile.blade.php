<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
@extends('layouts.app')

@section('content')

<div class="card mb-3 profileCard">
    <div class="card-header">
        <h2 class="profileCardHeader">Edit profile</h2>
    </div>


    <form method="post" action="{{route('user.updateProfile') }} ">
        @csrf
        <div class="form-group formMargin" >
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <label>Username</label>
            <input name="name" type="text" class="form-control" value="{{$user->name}}" required style="margin-bottom: 1%">

            <label>Faction</label>
            <select name="faction" class="select form-control" required id="faction" style="margin-bottom: 1%">
                <option disabled selected value="">Choose...</option>
                <option value="Alliance" @if ($user->faction=="Alliance") <?php echo "selected='selected'"; ?>@endif >
                    Alliance
                </option>
                <option value="Horde" @if ($user->faction=="Horde") <?php echo "selected='selected'"; ?>@endif >Horde
                </option>
            </select>

            <label>Realm</label>
            <select name="realm" class="select form-control" required id="id_realm" style="margin-bottom: 1%">
                <option disabled selected value="">Choose...</option>
                <optgroup label="en">
                    <option
                        value="EN-PvE Mirage Raceway" @if ($user->realm=="EN-PvE Mirage Raceway") <?php echo "selected='selected'"; ?>@endif>
                        EN-PvE Mirage Raceway
                    </option>
                    <option
                        value="EN-PvE Nethergarde Keep" @if ($user->realm=="EN-PvE Nethergarde Keep") <?php echo "selected='selected'"; ?>@endif>
                        EN-PvE Nethergarde Keep
                    </option>
                    <option
                        value="EN-PvE Pyrewood Village" @if ($user->realm=="EN-PvE Pyrewood Village") <?php echo "selected='selected'"; ?>@endif>
                        EN-PvE Pyrewood Village
                    </option>
                    <option
                        value="EN-PvP Ashbringer" @if ($user->realm=="EN-PvP Ashbringer") <?php echo "selected='selected'"; ?>@endif>
                        EN-PvP Ashbringer
                    </option>
                    <option
                        value="EN-PvP Dreadmist" @if ($user->realm=="EN-PvP Dreadmist") <?php echo "selected='selected'"; ?>@endif>
                        EN-PvP Dreadmist
                    </option>
                    <option
                        value="EN-PvP Gehennas" @if ($user->realm=="EN-PvP Gehennas") <?php echo "selected='selected'"; ?>@endif>
                        EN-PvP Gehennas
                    </option>
                    <option
                        value="EN-PvP Golemagg" @if ($user->realm=="EN-PvP Golemagg") <?php echo "selected='selected'"; ?>@endif>
                        EN-PvP Golemagg
                    </option>
                    <option
                        value="EN-PvP Shazzrah" @if ($user->realm=="EN-PvP Shazzrah") <?php echo "selected='selected'"; ?>@endif>
                        EN-PvP Shazzrah
                    </option>
                    <option
                        value="EN-PvP Skullflame" @if ($user->realm=="EN-PvP Skullflame") <?php echo "selected='selected'"; ?>@endif>
                        EN-PvP Skullflame
                    </option>
                </optgroup>
                <optgroup label="fr">
                    <option
                        value="FR-PvE Auberdine" @if ($user->realm=="FR-PvE Auberdine") <?php echo "selected='selected'"; ?>@endif>
                        FR-PvE Auberdine
                    </option>
                    <option
                        value="FR-PvP Amnennar" @if ($user->realm=="FR-PvP Amnennar") <?php echo "selected='selected'"; ?>@endif>
                        FR-PvP Amnennar
                    </option>
                    <option
                        value="FR-PvP Finkle" @if ($user->realm=="FR-PvP Finkle") <?php echo "selected='selected'"; ?>@endif>
                        FR-PvP Finkle
                    </option>
                    <option
                        value="FR-PvP Sulfuron" @if ($user->realm=="FR-PvP Sulfuron") <?php echo "selected='selected'"; ?>@endif>
                        FR-PvP Sulfuron
                    </option>
                </optgroup>
                <optgroup label="de">
                    <option
                        value="DE-PvE Everlook" @if ($user->realm=="DE-PvE Everlook") <?php echo "selected='selected'"; ?>@endif>
                        DE-PvE Everlook
                    </option>
                    <option
                        value="DE-PvE Lakeshire" @if ($user->realm=="DE-PvE Lakeshire") <?php echo "selected='selected'"; ?>@endif>
                        DE-PvE Lakeshire
                    </option>
                    <option
                        value="DE-PvE Razorfen" @if ($user->realm=="DE-PvE Razorfen") <?php echo "selected='selected'"; ?>@endif>
                        DE-PvE Razorfen
                    </option>
                </optgroup>
                <optgroup label="oc">
                    <option
                        value="OC-PvE Remulos"@if ($user->realm=="OC-PvE Remulos") <?php echo "selected='selected'"; ?>@endif>
                        OC-PvE Remulos
                    </option>
                    <option
                        value="OC-PvP Arugal" @if ($user->realm=="OC-PvP Arugal") <?php echo "selected='selected'"; ?>@endif>
                        OC-PvP Arugal
                    </option>
                    <option
                        value="OC-PvP Felstriker" @if ($user->realm=="OC-PvP Felstriker") <?php echo "selected='selected'"; ?>@endif>
                        OC-PvP Felstriker
                    </option>
                    <option
                        value="OC-PvP Yojamba" @if ($user->realm=="OC-PvP Yojamba") <?php echo "selected='selected'"; ?>@endif>
                        OC-PvP Yojamba
                    </option>
                </optgroup>

                <optgroup label="us-east">
                    <option
                        value="US-East-PvE Ashkandi" @if ($user->realm=="US-East-PvE Ashkandi") <?php echo "selected='selected'"; ?>@endif>
                        US-East-PvE Ashkandi
                    </option>
                    <option
                        value="US-East-PvE Mankrik" @if ($user->realm=="US-East-PvE Mankrik") <?php echo "selected='selected'"; ?>@endif>
                        US-East-PvE Mankrik
                    </option>
                    <option
                        value="US-East-PvE Pagle" @if ($user->realm=="US-East-PvE Pagle") <?php echo "selected='selected'"; ?>@endif>
                        US-East-PvE Pagle
                    </option>
                    <option
                        value="US-East-PvE Westfall" @if ($user->realm=="US-East-PvE Westfall") <?php echo "selected='selected'"; ?>@endif>
                        US-East-PvE Westfall
                    </option>


                </optgroup>
                <optgroup label="us-pacific">
                    <option
                        value="US-Pacific-PvE Atiesh" @if ($user->realm=="US-Pacific-PvE Atiesh") <?php echo "selected='selected'"; ?>@endif>
                        US-Pacific-PvE Atiesh
                    </option>
                    <option
                        value="US-Pacific-PvE Azuresong" @if ($user->realm=="US-Pacific-PvE Azuresong") <?php echo "selected='selected'"; ?>@endif>
                        US-Pacific-PvE Azuresong
                    </option>
                    <option
                        value="US-Pacific-PvE Myzrael" @if ($user->realm=="US-Pacific-PvE Myzrael") <?php echo "selected='selected'"; ?>@endif>
                        US-Pacific-PvE Myzrael
                    </option>
                    <option
                        value="US-Pacific-PvE Old Blanchy" @if ($user->realm=="US-Pacific-PvE Old Blanchy") <?php echo "selected='selected'"; ?>@endif>
                        US-Pacific-PvE Old Blanchy
                    </option>
                </optgroup>
            </select>

            <label>About</label>
            <textarea name="about" class="form-control" style="margin-bottom: 1%">{{$user->about}}</textarea>

            <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>

        </div>

    </form>

</div>

@endsection
