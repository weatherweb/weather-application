@extends('layouts.default')
@section('content')
    <div class="banner banner-in">
        <div class="container">
            <div class="col-md-6 banner-matter-in">
                <h1>LOGIN HERE</h1>
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
            <div class="contact">
                <div class="contact-grids">
                    <div class="contact-form">
                        <form>
                            <div class="alert alert-danger" id="alert-danger" style="display: none">Email or password
                                does not match,try again.
                            </div>
                            <div class="alert alert-success" id="alert-success" style="display: none">Login
                                successfull
                            </div>
                            <div class="contact-form-row col-md-12">
                                <div>
                                    <span>Email Address :</span>
                                    <input type="text" class="form-control" placeholder="example@gmail.com" id="email"
                                           onfocus="" onblur="">
                                </div>
                                <div>
                                    <span>Password :</span>
                                    <input type="password" class="form-control" id="password" placeholder="****** "
                                           onfocus="" onblur="">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="contact-form-row2 col-md-12">
                                <input type="submit" class="btn btn-success" value="LOGIN" id="loginBtn">
                                <input type="submit" class="btn btn-danger" value="REGISTER NOW" id="registerBtn">
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-bottom">
            <div class="container">
                <h3>Thanks for registering</h3>
                <p>we are the biggest weather updates provider online.</p>
            </div>
            <i> </i>
        </div>
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function () {
            $("#loginBtn").on("click", function (event) {
                event.preventDefault();
                var email = $("#email").val();
                var password = $("#password").val();
                $.ajax({
                    url: "/weather/user/getLogin",
                    type: "POST",
                    data: {
                        email: email,
                        password: password
                    },
                    success: function (response) {
                        if (response == "-1") {
                            $('#alert-danger').text("User not found,try again.");
                            $('#alert-danger').show();
                        } else {
                            window.location.href = "/"
                        }
                    }
                });

            });

            $("#registerBtn").on("click", function (event) {
                event.preventDefault();
                window.location.href = "/weather/register";
            });
        });
        $('#login-form').submit(function (event) {
            event.preventDefault();
            var postData = {
                'email': $('#email').val(),
                'password': $('#password').val()
            };
            $.ajax({
                type: 'POST',
                url: '/weather/user/getLogin',
                data: postData,
                success: function (response) {
                    $('#alert-success').text(response.responseJSON);
                    console.log(response.responseJSON);
                    $('#alert-success').show();
                },
                error: function (response) {
                    $('#alert-danger').text(response.responseJSON);
                    $('#alert-danger').show();
                    console.log(response);
                }
            });
        });
    </script>
    <!---->
@stop