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
                            <div class="contact-form-row col-md-12">
                                <div>
                                    <span>Email :</span>
                                    <input type="text" class="text" id="email" onfocus="" onblur="">
                                </div>
                                <div>
                                    <span>Password :</span>
                                    <input type="text" class="text" id="password" onfocus="" onblur="">
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
    <!---->
@stop