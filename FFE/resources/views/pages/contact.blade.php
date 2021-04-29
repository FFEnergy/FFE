@extends('layouts.app')

@section('content')

<section class="contactForm">
    <h2>Nous contacter</h2>
    <form class="contact-form" action="contact.html" method="post">
        <div class="upper-form">
            <div class="left-form">
                <label class="hidden" for="firstname">First Name</label>
                <input type="text" name="firstname" value="" placeholder="First Name">
                <label class="hidden" for="email">Email</label>
                <input type="email" name="email" value="" placeholder="Email">
            </div>
            <div class="right-form">
                <label class="hidden" for="lastname">Last Name</label>
                <input type="text" name="lastname" value="" placeholder="Last Name">
                <label class="hidden" for="Telephone">Télephone</label>
                <input type="text" name="Telephone" value="" placeholder="Télephone">
            </div>
            <label class="hidden" for="message">message</label>
            <textarea name="message" rows="4" cols="80" placeholder="message"></textarea>

        </div>
        <button class="bouton-primaire" type="submit" name="Envoyer">Envoyer</button>
        <!-- <a href="#parallax1"><img src="https://sandradasilva.net/wp-content/uploads/2019/03/Pure-CSS-Scroll-Animation-Arrow.gif"></a> -->
    </form>
</section>

<div id="parallax1" class="parallaxParent">
    <div style="background-image: url('../index/images/map.png');"></div>
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
