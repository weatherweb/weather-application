<!--header-->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="{{URL::asset('images/log.png')}}" alt=""></a>
        </div>
        <div class="top-nav">
            <span class="menu"><img src="{{URL::asset('images/menu.png')}}" alt=""> </span>
            <ul>
                <li class="active"><a href="index.html">HOME PAGE</a></li>
                <li><a href="services.html"> SERVICES</a></li>
                <li><a href="404.html"> LOCATIONS </a></li>
                <li><a href="404.html"> USERS </a></li>
                <li><a href="prices.html"> REGISTER </a></li>
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