@extends('layouts.app')

<style>
    body{
        padding-left: 0 !important;
    }
    header, footer ul{
        display: none !important;
    }
</style>
@section('content')

    <section class="login-block">
        <div class="container-fluid">
            <div class="row login-wrap flex-not-centered">
                <div class="col-md-7 col-sm-6 hidden-xs hidden-sm">
                    <div class="background-image-block flex-centered" style="background-image: url('../../img/login_image.png');height: 630px;">
                        <div>
                            <h4>
                                Aircraft Management System
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12 flex-centered login-form" style="padding-bottom:10px !important;">
                    <div>
                        <div class="form-wrap" style="padding-top:10%;">
                            <form data-parsley-validate=" " class="form-horizontal" role="form" method="POST" action="{{ route('login') }}"  novalidate>
                                {{ csrf_field() }}
                                <h5>
                                    Sign In
                                </h5>
                                <p style="margin-bottom: 30px;">
                                    Fill in your details
                                </p>

                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                                    <input id="email" type="email" placeholder="Enter Email" class=" " data-parsley-error-message="Please enter valid email address"  name="email" value="{{ old('email') }}" required  autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block danger-flash-message">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>


                                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }} ">
                                    <input  id="password" placeholder="Enter Password" type="password"   class=" " data-parsley-error-message="Please enter password"  name="password" required style="background: transparent">
                                    @if ($errors->has('password'))
                                        <span class="help-block danger-flash-message">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="submit-block">
                                    <button type="submit" class="login-button">
                                        Login
                                    </button>
                                    <label class="terms-and-condition" style="">
                                        Don't have an account ?
                                        <br><a href="{{ url('/register') }}" target="_blank">Register</a></label>

                                </div>


                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection







