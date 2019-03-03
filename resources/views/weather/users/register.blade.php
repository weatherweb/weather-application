@extends('layouts.default')
@section('content')
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
                            <div class="contact-form-row">
                                <div>
                                    <span>Name :</span>
                                    <input type="text" placeholder="Adam Alan" id="userName" class="form-control">
                                </div>
                                <div>
                                    <span>City Name :</span>
                                    <input type="text" placeholder="London" class="form-control" id="cityName">
                                </div>
                                <div>
                                    <span>Address :</span>
                                    <input type="text" class="form-control" placeholder="Street #02 London"
                                           id="address">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="contact-form-row">
                                <div>
                                    <span>Email :</span>
                                    <input type="email" placeholder="example@gmail.com" class="form-control" id="email">
                                </div>
                                <div>
                                    <span>Password  :</span>
                                    <input type="password" class="form-control" placeholder="*******" id="password">
                                </div>
                                <div>
                                    <span>Confirm Password :</span>
                                    <input type="password" class="form-control" placeholder="*******"
                                           id="confirmPassword">
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="clearfix"></div>
                            <input type="submit" value="REGISTER" id="registerBtn">
                            <input type="submit" value="ALREADY REGISTERED?" id="loginBtn">
                        </form>
                    </div>

                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"></iframe>
                    </div>
                </div>
            </div>
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
                window.location.href = "/weather/login";
            });

            $("#registerBtn").on("click", function (event) {
                event.preventDefault();

                var email = $("#email").val();
                var password = $("#password").val();
                var confirmPassword = $("#confirmPassword").val();
                var userName = $("#userName").val();
                var cityName = $("#cityName").val();
                var address = $("#address").val();

                $.ajax({
                    url: "/weather/user/registerUser",
                    type: "POST",
                    data: {
                        email: email,
                        password: password,
                        confirmPassword: confirmPassword,
                        userName: userName,
                        cityName: cityName,
                        address: address
                    },
                    success: function (response) {
                        if (response == "success") {
                            alert("Congratulation ! you have been registered.!");
                            window.location.href = "/weather/login";
                        } else {
                            $('#alert-danger').text(response + " ,please try again.");
                            $('#alert-danger').show();

                        }
                    }
                });
            });
        })
    </script>
    <!---->
@stop