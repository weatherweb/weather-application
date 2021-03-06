@extends('layouts.default')
@section('content')
    <div class="banner banner-in">
        <div class="container">
            <div class="col-md-6 banner-matter-in">
                <h1>Current Weather</h1>
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
                        <li><a href="#">All Details</a></li>
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
                    <h4>Current Weather </h4>
                    <div class="alert alert-primary" role="alert" id="alert">
                    </div>
                    <form>
                        <div class="col-md-6 service-name">
                            <div>
                                <span>Latitude : </span>
                                <input type="text" id="latitude" class="form-control" placeholder="45.0" onblur=""
                                       onfocus="">
                            </div>
                        </div>
                        <div class="col-md-6 service-name">
                            <div>
                                <span>Longitude : </span>
                                <input style="margin-left: 2px" type="text" id="longitude" class="form-control"
                                       placeholder="107.9" onblur="" onfocus="">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="send">
                            <input type="submit" id="send" value="Get Weather" style="margin: 8px">
                            <input type="submit" id="clear" value="Clear" style="margin: 8px">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    <div class="clearfix"></div>
                    <div class="ser-grid" id="details">
                        <h3><i></i> Forecast <span id="temp" style="color:black">57.5</span>&deg;</h3>
                        <div class="clearfix"></div>
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Summary - <span class="test" id="summary"></span></li>
                                <li class="list-group-item">Precip Type - <span class="test" id="precipType"></span>
                                </li>
                                <li class="list-group-item">WindSpeed - <span class="test" id="windspeed"></span><sup>
                                        mph</sup></li>
                                <li class="list-group-item">Humdidity - <span class="test" id="humidity"></span></li>
                                <li class="list-group-item">Pressure - <span class="test" id="pressure"></span></li>
                                <li class="list-group-item">Visibility - <span class="test" id="visibility"></span></li>
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
                $("#longitude").val("");
                $("#latitude").val("");
                $('#details').hide();
            });

            $('#send').on("click", function (event) {
                event.preventDefault();
                $("#alert").text("Searching please wait..");
                $("#alert").show();
                var longitude = $("#longitude").val();
                var latitude = $("#latitude").val();
                $.ajax({
                    url: "/weather/current/getCurrent",
                    type: 'GET',
                    data: {longitude: longitude, latitude: latitude},
                    success: function (response) {
                        console.log(response);
                        result = "";
                        $('#details').show();
                        console.log(response['currently']['temperature']);
                        console.log(response.currently.temperature);
                        console.log(response.currently.summary);
                        $("#icon").addClass(response['currently']['icon']);
                        $("#temp").text(response['currently']['temperature']);
                        $('#summary').text(response['currently']['summary']);
                        $('#windspeed').text(response['currently']['windSpeed']);
                        $('#humidity').text(response['currently']['humidity']);
                        $('#pressure').text(response['currently']['pressure']);
                        $('#visibility').text(response['currently']['visibility']);
                        $('#precipType').text(response['currently']['precipType']);
                        $("#alert").hide();
                    }
                });
            });
        });
    </script>
    <!---->
@stop