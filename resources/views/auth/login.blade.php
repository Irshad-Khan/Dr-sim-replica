@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="loginPage">
  <div class="loginBg">
    <img src="{{ asset('client/img/login.png') }}" alt="login" class="w-100">
  </div>
  <div class="container">
    <div class="loginContent">
      <ul  class="nav nav-pills" role="tablist">
        <li class="nav-item"><a class="nav-link active" href="#login" data-toggle="tab" role="tab">{{ __('landing_page.login.login') }}</a></li>
        <li class="nav-item"><a href="#signup" class="nav-link" data-toggle="tab" role="tab">{{ __('landing_page.signup.signup') }}</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="login">
          <form>
            <div class="input-group mb-4">
              <input type="email" class="form-control" placeholder="{{ __('landing_page.login.email') }}">
            </div>
            <div class="input-group mb-4">
              <input type="password" class="form-control" placeholder="{{ __('landing_page.login.password') }}">
            </div>
            <a href="#">
              {{ __('landing_page.login.forgot_password') }}
            </a>
            <button class="btn btn-primary w-100 b-radius-100 mt-4">{{ __('landing_page.login.login') }}</button>
          </form>
          <div class="or">
            {{ __('landing_page.login.or') }}
          </div>
          <div class="row">
            <div class="col-6 text-center">
              <a href="#"><img src="{{ asset('client/img/facebook.png') }}" alt="fb" class="img-fluid"></a>
            </div>
            <div class="col-6 text-center">
              <a href="#"><img src="{{ asset('client/img/google.png') }}" alt="google" class="img-fluid"></a>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="signup">
          <form>
            <div class="input-group mb-4">
              <input type="text" placeholder="{{ __('landing_page.signup.full_name') }}" class="form-control">
            </div>
            <div class="input-group mb-4">
              <input type="email" class="form-control" placeholder="{{ __('landing_page.signup.email') }}">
            </div>
            <div class="input-group mb-4">
              <input type="password" placeholder="{{ __('landing_page.signup.password') }}" class="form-control">
            </div>
            <button class="btn btn-primary w-100 b-radius-100 mt-4">{{ __('landing_page.signup.signup') }}</button>
          </form>
          <div class="or">
            {{ __('landing_page.signup.or') }}
          </div>
          <div class="row">
            <div class="col-6 text-center">
              <a href="#"><img src="{{ asset('client/img/facebook.png') }}" alt="fb" class="img-fluid"></a>
            </div>
            <div class="col-6 text-center">
              <a href="#"><img src="{{ asset('client/img/google.png') }}" alt="google" class="img-fluid"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
