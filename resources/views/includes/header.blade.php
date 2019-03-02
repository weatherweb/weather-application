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
                    <a href="{{url('/weather/')}}">HOME PAGE</a>
                </li>
                <li><a href="/weather/"> WEATHER DETAILS</a></li>
                <li><a href="404.html"> LOCATIONS </a></li>
                <li><a href="contact.html">LOGIN</a></li>
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