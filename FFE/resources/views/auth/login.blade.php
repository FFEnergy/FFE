@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="./css/CSS/login.css">
@endsection

@section('content')
  <section class="Logincards">
    <div class="cards login">
      <h2>Connexion</h2>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <label class="hidden" for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" class="@error('email') is-invalid @enderror" type="email" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <label class="hidden" for="password">{{ __('Password') }}</label>
        <input id="password" class="@error('password') is-invalid @enderror" type="password" name="password" value="" placeholder="Password" required autocomplete="current-password">
        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <div class="checkbox">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

              <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
              </label>
        </div>

        <button type="submit" class="bouton-primaire">
            {{ __('Login') }}
        </button>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
      </form>
    </div>
  </section>
@endsection
