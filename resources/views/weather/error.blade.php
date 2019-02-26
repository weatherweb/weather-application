@extends('layouts.default')
@section('content')
    <div class="banner banner-in">
        <div class="container">
            <div class="col-md-6 banner-matter-in">
                <h1>OOPS!</h1>
            </div>
            <div class="col-md-6 banner-side side-banner">
                <div class="col-md-6 side">
                    <img class="img-responsive" src="{{URL::asset('images/se1.jpg')}}" alt="">
                </div>
                <div class="col-md-6 side">
                    <img class="img-responsive" src="{{URL::asset('images/se.jpg')}}" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!---->
    <div class="content">
        <div class="container">
            <div class="four">
                <h2>Could not Find it</h2>
                <h3>404 Error!</h3>
                <a href="{{route('weather.users.index')}}" class="just-do">Go Back </a>
            </div>
        </div>
        <div class="content-bottom">
            <div class="container">
                <h3>DO YOU HATE WITH ME?</h3>
                <p>we are the biggest haters on planet, fella.</p>
            </div>
            <i> </i>
        </div>
    </div>
@stop
