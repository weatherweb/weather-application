@extends('layouts.default')
@section('content')
    <!---->
    <div class="banner">
        <div class="container">
            <div class="col-md-6 banner-matter">
                <!-- requried-jsfiles-for owl -->
                <link href="{{URL::asset('css/owl.carousel.css')}}" rel="stylesheet">
                <script src="{{URL::asset('js/owl.carousel.js')}}"></script>
                <script>
                    $(document).ready(function () {
                        $("#owl-demo1").owlCarousel({
                            items: 1,
                            lazyLoad: true,
                            autoPlay: true,
                            navigation: true,
                            navigationText: true,
                            pagination: false,
                        });
                    });
                </script>
                <!-- //requried-jsfiles-for owl -->
                <!-- start content_slider -->
                <div id="owl-demo1" class="owl-carousel">
                    <div class="item-bottom">
                        <div class="item-right">
                            <h1>With Hourly Daily & Current weather support</h1>
                            <span>Check out today! it's free for first 1000 call per day.!</span>
                        </div>
                    </div>
                    <div class="item-bottom">
                        <div class="item-right">
                            <h1>best weather application details provider app</h1>
                            <span>Check out today! it's free for first 1000 call per day.!</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 banner-side">
                <div class="col-md-6 side">
                    <img class="img-responsive" src="{{URL::asset('images/ba.jpg')}}" alt="">
                </div>
                <div class="col-md-6 side">
                    <img class="img-responsive" src="{{URL::asset('images/ba1.jpg')}}" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!---->
    <div class="content">
        <div class="container">
            <div class="content-top">
                <div class="col-md-4 grid">
                    <h3><i></i> Check Current Weather</h3>
                    <a href="{{url('weather/current')}}" class="just-do-in">Check</a>
                </div>
                <div class="col-md-4 grid">
                    <h3><i class="mid"></i>Check Hourly Weather</h3>
                    <a href="{{url('weather/hourly')}}" class="just-do-in">Check</a>
                </div>
                <div class="col-md-4 grid">
                    <h3><i class="just"></i> Check Daily Weather</h3>
                    <a href="{{url('weather/daily')}}" class="just-do-in">Check</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="content-grid">
                <h2>IS IT TURE? EVERYDAY IS RAINY DAY. I LOVE AUTUMN!</h2>
                <p>This is a Laravel based web application which provides weather information using Dark Sky API
                    with current, hourly and daily bases weather.</p>
            </div>
        </div>
        <div class="content-bottom">
            <div class="container">
                <h3>About Team</h3>
                <p>we are the biggest lovers on planet, fella.</p>
            </div>
            <i> </i>
        </div>
    </div>
@stop