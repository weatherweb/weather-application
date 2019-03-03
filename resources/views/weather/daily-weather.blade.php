@extends('layouts.default')
@section('content')
    <div class="banner banner-in">
        <div class="container">
            <div class="col-md-6 banner-matter-in">
                <h1>Daily Weather</h1>
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
                        <li><a href="{{url('weather/current')}}">Current Weather</a></li>
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
                                <input type="text" style="margin-left: 2px" id="longitude" class="form-control"
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
                </div>
            </div>
            <div id="det" class="col-md-6 col-lg-12">
                <h3 id="overallSummary" style="margin: 10px;padding: 5px;"></h3>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $("#clear").on('click', function (event) {
                event.preventDefault();
                $("#longitude").val("");
                $("#latitude").val("");
                $('#det').hide();
            });
            var res = "";
            $("#det").hide();
            $(".daily").hide();
            $('#send').on("click", function (event) {
                event.preventDefault();
                $("#alert").text("Searching please wait..");
                $("#alert").show();
                var longitude = $("#longitude").val();
                var latitude = $("#latitude").val();
                $.ajax({
                    url: "/weather/daily/getDaily",
                    type: 'GET',
                    data: {longitude: longitude, latitude: latitude},
                    success: function (response) {
                        console.log(response);
                        result = "";
                        $('#det').hide();
                        var overallSummary = response['daily']['summary'];
                        $("#overallSummary").text("Over all summary : " + overallSummary);
                        for (v in response['daily']['data']) {
                            var tempHigh = response['daily']['data'][v]['temperatureHigh'];
                            var tempLow = response['daily']['data'][v]['temperatureLow'];
                            var tempMax = response['daily']['data'][v]['temperatureMax'];
                            var tempMin = response['daily']['data'][v]['temperatureMin'];
                            var summary = response['daily']['data'][v]['summary'];
                            var windSpeed = response['daily']['data'][v]['windSpeed'];
                            var humidity = response['daily']['data'][v]['humidity'];
                            var pressure = response['daily']['data'][v]['pressure'];
                            var visibility = response['daily']['data'][v]['visibility'];
                            var precipType = response['daily']['data'][v]['precipType'];

                            res += '<div class="card col-md-3 col-lg-3 daily">';
                            res += '<ul class="list-group list-group-flush">';
                            res += '<li class="list-group-item">Summary - <span class="test" id="summary">' + summary + '</span></li>';
                            res += '<li class="list-group-item">Temp Max - <span class="test" id="tempMax">' + tempMax + '</span></li>';
                            res += '<li class="list-group-item">Temp Min - <span class="test" id="tempMin">' + tempMin + '</span></li>';
                            res += '<li class="list-group-item">Temp High - <span class="test" id="tempHigh">' + tempHigh + '</span></li>';
                            res += '<li class="list-group-item">Temp Low - <span class="test" id="tempLow">' + tempLow + '</span></li>';
                            res += '<li class="list-group-item">Precip Type - <span class="test" id="precipType">' + precipType + '</span>';
                            res += '</li>';
                            res += '<li class="list-group-item">WindSpeed - <span class="test" id="windspeed">' + windSpeed + '</span><sup>mph</sup></li>';
                            res += '<li class="list-group-item">Humdidity - <span class="test" id="humidity">' + humidity + '</span></li>';
                            res += '<li class="list-group-item">Pressure - <span class="test" id="pressure">' + pressure + '</span></li>';
                            res += '<li class="list-group-item">Visibility - <span class="test" id="visibility">' + visibility + '</span></li>';
                            res += '</ul>';
                            res += '<div class="clearfix"></div>';
                            res += '</div>';

                        }
                        $("#det").append(res);
                        $("#det").show();
                        $("#alert").hide();
                    }
                });
            });
        });
    </script>
    <!---->
@stop