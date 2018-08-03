
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

{{--<section>--}}
  {{--<div class="row">--}}
    {{--<div class="col-md-7">--}}
      {{--<div  class="bg-img">--}}
          {{--<div class="fontfamily1">AIMS</div>--}}
      {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-5">--}}
      {{--<div class="card">--}}
                   {{--<div class="fontfamily">--}}

                     {{--<div class="card-header">{{ __('Register') }}</div>--}}


     {{--</div>--}}
                     {{--<div class="card-body">--}}

                         {{--<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">--}}
                             {{--@csrf--}}

                             {{--<div class="form-group row">--}}
                                 {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}
{{--<div class="col-md-6">--}}
                                 {{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

                                                             {{--@if ($errors->has('name'))--}}
                                                                 {{--<span class="invalid-feedback" role="alert">--}}
                                                                     {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                                                 {{--</span>--}}
                                                             {{--@endif--}}
                                                           {{--</div>--}}
                                                                                   {{--</div>--}}

                                                                                   {{--<div class="form-group row">--}}
                                                                                       {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                                                                                       {{--<div class="col-md-6">--}}
                                                                                           {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

                                                                                           {{--@if ($errors->has('email'))--}}
                                                                                               {{--<span class="invalid-feedback" role="alert">--}}
                                                                                                   {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                                                                               {{--</span>--}}
                                                                                           {{--@endif--}}
                                                                                       {{--</div>--}}
                                                                                   {{--</div>--}}

                                                                                   {{--<div class="form-group row">--}}
                                                                                       {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                                                                                       {{--<div class="col-md-6">--}}
                                                                                           {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                                                                           {{--@if ($errors->has('password'))--}}
                                                                                               {{--<span class="invalid-feedback" role="alert">--}}
                                                                                                   {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                                                                               {{--</span>--}}
                                                                                           {{--@endif--}}
                                                                                       {{--</div>--}}
                                                                                   {{--</div>--}}

                                                                                   {{--<div class="form-group row">--}}
                                                                                       {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                                                                                       {{--<div class="col-md-6">--}}
                                                                                           {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                                                                                       {{--</div>--}}
                                                                                   {{--</div>--}}
                                                                                   {{--<div class="form-group row mb-0">--}}
                        {{--<div class="col-md-6 offset-md-4">--}}

                            {{--<button type="submit" class="btn btn-primary">--}}
                                {{--{{ __('Register') }}--}}
                            {{--</button>--}}

                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                    {{--</div>--}}
{{--<b>--}}
                {{--</form>--}}

                                  {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}





    {{--@endsection--}}

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
                        <form data-parsley-validate=" " class="form-horizontal" role="form" method="POST" action="{{ route('register') }}"  novalidate>
                            {{ csrf_field() }}
                            <h5>
                                Register
                            </h5>
                            <p style="margin-bottom: 30px;">
                                Fill in your details
                            </p>

                            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                                <input id="name" type="text" placeholder="Enter Name" class=" " data-parsley-error-message="Please enter valid email address"  name="name" value="{{ old('email') }}" required  autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                                @endif
                            </div>

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

                            <div class="input-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} ">
                                <input  id="password" placeholder="Confirm Password" type="password"   class=" " data-parsley-error-message="Please enter password"  name="password_confirmation" required style="background: transparent">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block danger-flash-message">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                @endif
                            </div>

                            <div class="submit-block">
                                <button type="submit" class="login-button">
                                    Register
                                </button>
                                <label class="terms-and-condition" style="">
                                  Already have an account
                                <br><a href="{{ url('/login') }}" target="_blank">Login</a></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

