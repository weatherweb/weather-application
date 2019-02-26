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
                            <h1>best mobIle app</h1>
                            <span>Download this cool app for free</span>
                            <p>Dignissim eros luptatum dolore tation erat euismod, ad ut illum lobortis qui, velit
                                ullamcorper, lobortis vel, vel ad duis lorem nisl. Iriure dolore et eros aliquip aliquip
                                zzril vel praesent ex feugiat dolor nostrud eu vel delenit. Duis eu qui iusto, commodo
                                consequat, consequat laoreet augue, duis at adipiscing ullamcorper facilisis dolor te
                                odio. </p>
                            <a href="#"><i> </i>Download </a>
                        </div>
                    </div>
                    <div class="item-bottom">
                        <div class="item-right">
                            <h1>best mobIle app</h1>
                            <span>Download this cool app for free</span>
                            <p>Dignissim eros luptatum dolore tation erat euismod, ad ut illum lobortis qui, velit
                                ullamcorper, lobortis vel, vel ad duis lorem nisl. Iriure dolore et eros aliquip aliquip
                                zzril vel praesent ex feugiat dolor nostrud eu vel delenit. Duis eu qui iusto, commodo
                                consequat, consequat laoreet augue, duis at adipiscing ullamcorper facilisis dolor te
                                odio. </p>
                            <a href="#"><i> </i>Download </a>
                        </div>
                    </div>
                    <div class="item-bottom">
                        <div class="item-right">
                            <h1>best mobIle app</h1>
                            <span>Download this cool app for free</span>
                            <p>Dignissim eros luptatum dolore tation erat euismod, ad ut illum lobortis qui, velit
                                ullamcorper, lobortis vel, vel ad duis lorem nisl. Iriure dolore et eros aliquip aliquip
                                zzril vel praesent ex feugiat dolor nostrud eu vel delenit. Duis eu qui iusto, commodo
                                consequat, consequat laoreet augue, duis at adipiscing ullamcorper facilisis dolor te
                                odio. </p>
                            <a href="#"><i> </i>Download </a>
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
                    <h3><i></i> Cool clear weahter</h3>
                    <p>Blandit, in, augue at tincidunt ut augue elit amet feugiat laoreet. Autem nisl tincidunt aliquip
                        eu minim veniam feugait accumsan dolore eros </p>
                    <a href="#" class="just-do-in">Just do it </a>
                </div>
                <div class="col-md-4 grid">
                    <h3><i class="mid"></i>This Weather sucks</h3>
                    <p>Blandit, in, augue at tincidunt ut augue elit amet feugiat laoreet. Autem nisl tincidunt aliquip
                        eu minim veniam feugait accumsan dolore eros </p>
                    <a href="#" class="just-do-in">Just do it </a>
                </div>
                <div class="col-md-4 grid">
                    <h3><i class="just"></i> Clouds All Around</h3>
                    <p>Blandit, in, augue at tincidunt ut augue elit amet feugiat laoreet. Autem nisl tincidunt aliquip
                        eu minim veniam feugait accumsan dolore eros</p>
                    <a href="#" class="just-do-in">Just do it </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="content-grid">
                <h2>IS IT TURE? EVERYDAY IS RAINY DAY. I HATE AUTUMN!</h2>
                <p>Blandit ad vel adipiscing nostrud consequat, te quis euismod dolor nisl nostrud consequat ex blandit
                    hendrerit ad et dolor. Nostrud, suscipit eu ipsum ullamcorper dolore in augue ullamcorper nulla.
                    Eros velit esse nostrud qui, adipiscing esse luptatum at vel praesent erat, diam feugait luptatum
                    sit lorem vel illum dignissim luptatum diam illum, duis ut, in. Lobortis at tincidunt ut augue elit
                    amet feugiat laoreet luptatum nisl tincidunt aliquip eu minim veniam feugait accumsan dolore eros,
                    feugait in dolor aliquam erat augue. Hendrerit, illum commodo facilisis, exerci, tation consequat,
                    iriure, feugiat et facilisis molestie vulputate.</p>
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