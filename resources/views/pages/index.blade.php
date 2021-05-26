@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="./css/CSS/index.css">
@endsection

@section('content')
    <section class="index">
        <h1 class="t1">FFEnergy</h1>
        <section class="nuages">
            <img class="nuage" src="./img/nuage1.svg" alt="">
            <img class="nuage" src="./img/nuage2.svg" alt="">
            <img class="nuage" src="./img/nuage3.svg" alt="">
        </section>
        <section class="Eolienne animationtropstyle">
            <img src="img\wind.svg" alt="">
            <img class"moncul" src="img\nuage4.svg" alt="">
        </section>
        <section class="Windy">
            <div class="text">
              @php
                // dd($content);
              @endphp
                <div class="oiseaux">
                    <img data-aos="fade-up-left" data-aos-anchor-placement="top-center" class="oiseau" src="img\oiseau.png" alt="">
                    <img data-aos="fade-right" data-aos-anchor-placement="top-center" class="oiseau" src="img\oiseau.png" alt="">
                    <img data-aos="fade-down-right" data-aos-anchor-placement="top-center" class="oiseau" src="img\oiseau.png" alt="">
                </div>
                <div class="paragraphe">
                    <h3>@php echo $content[0]['titre_content']; @endphp</h3>
                    <p>
                      @php echo $content[0]['content']; @endphp
                    </p>
                    <div id="trigerBird" class="boutons-eolienne">
                      <a class="bouton-primaire" href="/fiche-produit">En savoir plus</a>
                      <a class="bouton-primaire" href="/contact">Acheter</a>
                    </div>
                </div>
            </div>

        </section>
        <section class="Pourquoi">
            <h2>@php echo $content[1]['titre_content']; @endphp</h2>
            <div class="text">
                <div class="paragraphe">
                    <div class="img">
                    </div>
                    <p>
                      @php echo $content[1]['content']; @endphp
                    </p>
                    <div class="img">
                    </div>
                </div>
            </div>
        </section>
        <section class="Moyen">
            <h2 id="triggerBullMoyen">Des moyens mis en place </h2>

            <div class="text">
                <div class="paragraphe">
                    <div class="img">
                    </div>
                    <p>
                      @php echo $content[2]['content']; @endphp
                    </p>
                    <div class="img">
                    </div>
                </div>
            </div>
        </section>
        <section class="Dessin">
            <div class="plaine-petit">
                <img src="img/montagne.png" alt="">
                <img src="img/arbre1.png" alt="">
            </div>
            <div class="plaine-grand">
                <img src="img\wind3.svg" alt="">
                <img src="img/arbre1.png" alt="">
                <img src="img/arbre2.png" alt="">
                <img src="img/arbre3.png" alt="">
                <img src="img\bush.svg" alt="">

            </div>
        </section>
    </section>
@endsection
