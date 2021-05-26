@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="./css/CSS/login.css">
@endsection

@section('content')
  <section class="Logincards">
    <div class="cards register">
      <h2>Inscription</h2>
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <label class="hidden" for="name">{{ __('Name') }}</label>
        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom">
        @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <label class="hidden" for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <label class="hidden" for="password">{{ __('Password') }}</label>
        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <label class="hidden" for="password-confirm">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

        {{-- <div class="progress-bar-back">
          <div id="progress-bar-1"></div>
          <div id="progress-bar-2"></div>
          <div id="progress-bar-3"></div>
          <div id="progress-bar-4"></div>
        </div> --}}


        <button type="submit" class="bouton-primaire">
            {{ __('Register') }}
        </button>
      </form>
    </div>
  </section>
@endsection
