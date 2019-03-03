@extends('layouts.default')
@section('content')
    <div class="banner banner-in">
        <div class="container">
            <div class="col-md-6 banner-matter-in">
                <h1>GET YOUR FAVOURATE LOCATIONS</h1>
            </div>
            <div class="col-md-6 banner-side side-banner">
                <div class="col-md-6 side">
                    <img alt="" class="img-responsive" src="{{URL::asset('images/se1.jpg')}}">
                </div>
                <div class="col-md-6 side">
                    <img alt="" class="img-responsive" src="{{URL::asset('images/se.jpg')}}">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!---->
    <div class="content">
        <div class="container">
            <div class="service-top">
                <div class="col-md-4 grid-service-in">
                    <ul class="drop">
                        <li><a href="{{url('weather/daily')}}">Daily Weather</a></li>
                        <li><a href="{{url('weather/hourly')}}">Hourly Weather</a></li>
                        <li><a href="{{url('weather/current')}}">Current Weather</a></li>
                    </ul>
                </div>
                <style>
                    .test {
                        margin-left: 20px;
                        padding: 4px;
                        color: #2a88bd;
                    }
                </style>
                <div class="col-md-8 service-para">
                    <h4>Search coordinates by city name </h4>
                    <div class="alert alert-primary" role="alert" id="alert">
                    </div>
                    <form>
                        <div class="col-md-6 service-name">
                            <div>
                                <span>City Name : </span>
                                <input type="text" id="city-name" class="form-control" placeholder="London" onblur=""
                                       onfocus="">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="send">
                            <input type="submit" id="send" value="Get Location" style="margin: 8px">
                            <input type="submit" id="clear" value="Clear" style="margin: 8px">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    <div class="clearfix"></div>
                    <div class="ser-grid" id="details">
                        <h3>Location Details</h3>
                        <div class="clearfix"></div>
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Latitude - <span class="test" id="latitude"></span></li>
                                <li class="list-group-item">Longitude - <span class="test" id="longitude"></span>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#details').hide();

            $("#clear").on('click', function (event) {
                event.preventDefault();
                $("#city-name").val("");
                $("#country-name").val("");
                $('#details').hide();
            });

            $('#send').on("click", function (event) {
                event.preventDefault();
                $("#alert").text("Searching please wait..");
                $("#alert").show();
                var cityName = $("#city-name").val();
                $.ajax({
                    url: "/weather/location/getDetails",
                    type: 'GET',
                    data: {cityName: cityName},
                    success: function (response) {
                        console.log(response);
                        result = "";
                        $('#details').show();
                        $("#latitude").text(response['city']['lat']);
                        $("#longitude").text(response['city']['lon']);
                        $("#alert").hide();
                    }
                });
            });
        });
    </script>
    <!---->
@stop