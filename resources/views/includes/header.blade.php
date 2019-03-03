<!--header-->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="{{url('/')}}"><img src="{{URL::asset('images/log.png')}}" alt=""></a>
        </div>
        <div class="top-nav">
            <span class="menu"><img src="{{URL::asset('images/menu.png')}}" alt=""> </span>
            <ul>
                <li class="active">
                    <a href="{{url('/')}}">HOME PAGE</a>
                </li>
                <li><a href="{{url('/weather/')}}"> WEATHER DETAILS</a></li>
                <li><a href="{{url('/weather/locations')}}"> GET COORDINATES </a></li>
                <li><a href="{{url('/weather/login')}}">LOGIN</a></li>
            </ul>
            <!--script-->
            <script>
                $("span.menu").click(function () {
                    $(".top-nav ul").slideToggle(500, function () {
                    });
                });
            </script>
        </div>
        <div class="clearfix"></div>
    </div>
</div>