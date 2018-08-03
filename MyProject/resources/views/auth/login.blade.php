
@extends('layouts.app')

@section('content')

<section>
  <div class="row">
    <div class="col-md-7">
      <div  class="bg-img">
          <div class="fontfamily1">AIMS</div>
      </div>
    </div>
    <div class="col-md-5">
      <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
        <div class="form-block">
    <div class="form-group row">
      <label for="email" >{{ __('E-Mail ') }}</label>

        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
    </div>
    <div class="form-group row">
      <label for="password">{{ __('Password') }}</label>

        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group row">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>

    <div class="form-group row ">
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
        <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a> -->
    </div>
    <a href="/register" >Not a User? Register here</a>
  </div>
    </form>


  </div>
  </div>

</section>

@endsection
