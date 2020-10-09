<!doctype html>
<html>
<head>
    {{--    @include('includes.head')--}}
    <title>blog</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
{{--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>--}}
{{--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
   <link rel="stylesheet" type="text/css" href="..\assets\files\css\newStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/bb7899a11f.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="..\assets\files\js\layout\index.js"></script>
    <script>
        window.laravel_csrf_token = "<?php echo csrf_token(); ?>";
    </script>
</head>
<body>
<div class="col-right-header">
    <div class="row text-header-pad" style="width: 100%">
        <div class="col-lg-4 text-header-left">Tuấn</div>
        <div class="col-lg-8  text-header">
            <div class="row">
                <div class="col-lg-1 "><ul><li class="text-header-list"><a class="text" href="{{url('/')}}">Home</a></li></ul></div>
                <div class="col-lg-1"><ul><li class="text-header-list"><a class="text" href="{{url('/about')}}">About</a></li></ul></div>
                <div class="col-lg-1"><ul><li class="text-header-list"><a class="text" href="{{url('/contact') }}">Contact</a></li></ul></div>
                <div class="col-lg-1"><ul><li class="text-header-list"><a class="text" href="{{url('/')}}">Authors</a></li></ul></div>
                <div class="col-lg-1"><ul><li class="text-header-list"><a class="text" href="{{url('/')}}">Login</a></li></ul></div>
                <div class="col-lg-3"><ul><li class="text-header-list"><a class="text-header-signup" href="{{url('/')}}">Sign Up</a></li></ul></div>
                <div class="col-lg-2"><i id="icon-sun" class="fas fa-sun icon-color"></i><i id="icon-moon" class="fas fa-cloud-moon d-none"></i></div>
                <div class="col-lg-2"><i class="fas fa-search text"></i></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    {{--    <header class="row">--}}
    {{--        @include('includes.header')--}}
    {{--    </header>--}}
    <div id="main" class="row">
        @yield('content')</div>

</div>
</body>

<div class="row footer-background">
    <div class="col-lg-4">
        <div class="col-lg-12 text-title">Tags</div>
        <div class="col-lg-12 text">Education</div>
        <div class="col-lg-12 text">Inspiration</div>
        <div class="col-lg-12 text">Lifestyle</div>
        <div class="col-lg-12 text">Nature</div>
        <div class="col-lg-12 text">Travel</div>
        <div class="col-lg-12 text">Work</div>
    </div>
    <div class="col-lg-4">
        <div class="col-lg-12 text-title">Navigation</div>
        <div class="col-lg-12 text">Home</div>
        <div class="col-lg-12 text">About</div>
        <div class="col-lg-12 text">Contact</div>
        <div class="col-lg-12 text">Element</div>
        <div class="col-lg-12 text">Authors</div>
        <div class="col-lg-12 text">Tags</div>
    </div>
    <div class="col-lg-4">
        <div class="col-lg-12 text-title">SUBSCRIBE</div>
        <div class="input-group mb-12">
            <input type="text" class="form-control" placeholder="Your email address" aria-label="Your email address" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">SUBSCRIBE</span>
            </div>
        </div>
    </div>
    <div class="col-lg-12 text-footer">
        <div class="row">
            <div class="col-lg-6 text">© 2020 Penang – Published with Ghost & Penang</div>
            <div class="col-lg-6 footer-icon">
                <div class="col-lg-1 text"><i class="fab fa-facebook-f"></i></div>
                <div class="col-lg-1 text"><i class="fab fa-instagram"></i></div>
                <div class="col-lg-1 text"><i class="fab fa-twitter"></i></div>
                <div class="col-lg-1 text"><i class="fas fa-wifi"></i></div>
            </div>
        </div>

    </div>
</div>
