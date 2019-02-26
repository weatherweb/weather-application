@extends('layouts.default')
@section('content')
    <div class="content">
        <div class="container">
            <div class="contact">
                <div class="contact-grids">
                    <div class="contact-form">
                        <form>
                            <div class="contact-form-row">
                                <div>
                                    <span>Name :</span>
                                    <input type="text" class="text">
                                </div>
                                <div>
                                    <span>City Name :</span>
                                    <input type="text" class="text">
                                </div>
                                <div>
                                    <span>Address :</span>
                                    <input type="text" class="text">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="contact-form-row">
                                <div>
                                    <span>Email :</span>
                                    <input type="text" class="text">
                                </div>
                                <div>
                                    <span>Password  :</span>
                                    <input type="text" class="text">
                                </div>
                                <div>
                                    <span>Confirm Password :</span>
                                    <input type="text" class="text">
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="clearfix"></div>
                            <input type="submit" value="REGISTER">
                            <input type="submit" value="ALREADY REGISTERED?">
                        </form>
                    </div>

                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!---->
@stop