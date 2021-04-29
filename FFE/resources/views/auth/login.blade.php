@extends('layouts.app')


@section('content')
  <section class="Logincards">
    <div data-aos="zoom-in" class="cards login">
      <h2>Connexion</h2>
      <form class="" action="login.html" method="post">
        <label class="hidden" for="email">Email</label>
        <input type="email" name="email" value="" placeholder="Email">

        <label class="hidden" for="password">Password</label>
        <input type="password" name="password" value="" placeholder="Password">

        <div class="checkbox">
          <input type="checkbox" name="stay" value="" placeholder="">
          <label class="" for="stay">Restez connecté</label>
        </div>

        <a href="#">Mot de passe oublié ?</a>
        <button class="bouton-primaire" type="submit" name="Signup">Sign up</button>
      </form>
    </div>
  </section>
@endsection
