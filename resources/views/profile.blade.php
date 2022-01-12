@extends('layouts.app')

@section('content')
<div class="grid">
    {{-- <h1>PROFILE</h1> --}}
    <div class="information">
        <div class="grid-profile">
            <div class="profile-picture">
                <h5 id="header-profile">Personal Profile</h5>
                @if(Auth::user()->image)
                <form action="{{route('profile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="input-file">
                        <input type="file" name="image">
                        <img class="image rounded-circle" src="{{asset('/storage/image/'.Auth::user()->image)}}" alt="profile_image">
                    </label>
                    <br>
                    <label class="input-submit">
                        <input class="btn-submit" type="submit" value="Change">
                        <button class="btn-change">Change</button>
                    </label>
                </form>
                @endif
                
            </div>
            <div class="profile-details">
                <div class="details-user">
                    <p id="header">NAME</p>
                    <p id="details">{{ Auth::user()->name }}</p>
                </div>
                <div class="details-user">
                    <p id="header">GENDER</p>
                    <p id="details">{{ Auth::user()->gender }}</p>
                </div>
                <div class="details-user">
                    <p id="header">ID NUMBER</p>
                    <p id="details">{{ Auth::user()->nik }}</p>
                </div>
                <div class="details-user">
                    <p id="header">BIRTHDAY</p>
                    <p id="details">{{ Auth::user()->birthday }}</p>
                </div>
                <div class="details-user">
                    <p id="header">EMAIL</p>
                    <p id="details">{{ Auth::user()->email }}</p>
                </div>
                <div class="details-user">
                    <p id="header">PHONE NUMBER</p>
                    <p id="details">{{ Auth::user()->phone }}</p>
                </div>
                <div class="details-user">
                    <p id="header">AGE</p>
                    <p id="details">{{ Auth::user()->age }}</p>
                </div>
                <div class="details-user">
                    <p id="header">ADDRESS</p>
                    <p id="details">{{ Auth::user()->address }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection