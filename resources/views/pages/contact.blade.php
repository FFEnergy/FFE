@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="./css/CSS/contact.css">
@endsection

@section('content')

<section class="contactForm">
    <h2>Nous contacter</h2>
    <form class="contact-form" action="{{ route('contact.contact') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="upper-form">
            <div class="left-form">
                <label class="hidden" for="firstname">First Name</label>
                <input type="text" name="firstname" value="{{ old('firstname') }}" placeholder="First Name">
                @error('firstname')
                  <p class="error">{{ $message }}</p>
                @enderror
                <label class="hidden" for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                @error('email')
                  <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="right-form">
                <label class="hidden" for="name">Last Name</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Last Name">
                @error('name')
                  <p class="error">{{ $message }}</p>
                @enderror
                <label class="hidden" for="telephone">Télephone</label>
                <input type="text" name="telephone" value="{{ old('telephone') }}" placeholder="Télephone">
                @error('telephone')
                  <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <label class="hidden" for="message">message</label>
            <textarea name="message" rows="4" cols="80" value="{{ old('message') }}" placeholder="message"></textarea>
            @error('message')
              <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <button class="bouton-primaire" type="submit" name="Envoyer">Envoyer</button>
        <!-- <a href="#parallax1"><img src="https://sandradasilva.net/wp-content/uploads/2019/03/Pure-CSS-Scroll-Animation-Arrow.gif"></a> -->
    </form>
</section>

<div id="parallax1" class="parallaxParent">
    <div style="background-image: url('/img/map.png');"></div>
</div>

<section class="info">
    <div class="number">
        <i class="fas fa-phone"></i>
        <p>+33 7 83 90 66 47</p>
    </div>
    <div class="adresse">
        <i class="fas fa-map-signs"></i>
        <p>50 cours de la rebublique, 69100</p>
    </div>
</section>
@endsection
