<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Social</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/x.y.z/css/bulma.css"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset ('css/carWebsite.css') }}" rel="stylesheet"/>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset ('images/favicon.png') }}"/>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Logout</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="content">


        <div class="title m-b-md">
            Car Social
        </div>

        <div class="links">
            <a href="carDetails">Car Details</a>
            <a href="editDetails">My Uploads</a>
            <a href="upload">Upload</a>
            <a href="contact">Contact Us</a>
            <a href="aboutUs">About Us</a>
        </div>
        <div class="title credits">
            Created by Parth Sharma
        </div>
    </div>

</div>
</body>
</html>
