@extends('layouts.app')

@section('content')
    <section class="index">
        <h1 class="t1">FFEnergy</h1>
        <section class="nuages">
            <img class="nuage" src="./images/nuage1.svg" alt="">
            <img class="nuage" src="./images/nuage2.svg" alt="">
            <img class="nuage" src="./images/nuage3.svg" alt="">
        </section>
        <section class="Eolienne animationtropstyle">
            <img src="images\wind.svg" alt="">
            <img class"moncul" src="images\nuage4.svg" alt="">
        </section>
        <section class="Windy">
            <div class="text">

                <div class="oiseaux">
                    <img data-aos="fade-up-left" data-aos-anchor-placement="top-center" class="oiseau" src="images\oiseau.png" alt="">
                    <img data-aos="fade-right" data-aos-anchor-placement="top-center" class="oiseau" src="images\oiseau.png" alt="">
                    <img data-aos="fade-down-right" data-aos-anchor-placement="top-center" class="oiseau" src="images\oiseau.png" alt="">
                </div>
                <div class="paragraphe">
                    <h3>Windy</h3>
                    <p>
                        Windy est une éolienne faite à 100% d'objet recyclé. Cette Éolienne a pour
                        but d'aider les personnes n'ayant pas accès couramment à l'électricité.
                        Vous pouvez si vous avez les moyens acheter celle-ci pour nous aider à en faire plus.
                    </p>
                    <div id="trigerBird" class="boutons-eolienne">
                        <button type="button" name="EnSavoirPlus" class="bouton-primaire">En savoir plus</button>
                        <button type="button" name="EnSavoirPlus" class="bouton-primaire">Acheter</button>
                    </div>
                </div>
            </div>

        </section>
        <section class="Pourquoi">
            <h2 id="triggerBullPourquoi">Pourquoi ce projet ?</h2>
            <h2>Une situation dans le besoin</h2>
            <div class="text">
                <div data-aos="fade-right" data-aos-anchor-placement="top-center" class="paragraphe">
                    <div class="img">
                        <img class="nuageTxt" src="images\nuage3.svg" alt="">
                        <img class="nuageTxt" src="images\nuage2.svg" alt="">
                    </div>
                    <p>
                        Malheureusement aujourd’hui environ 15% de la population mondiale n’a
                        pas accès à l'électricité, mais des personnes en ont besoin pour par
                        exemple avoir un peu de lumière à la nuit tomber et pouvoir étudier.
                    </p>
                    <div class="img">
                        <img class="nuageTxt" src="images\nuage1.svg" alt="">
                    </div>
                </div>
                <div class="paragraphe">
                    <div class="img">
                    </div>
                    <p>
                        Mais le réel besoin des habitant d'après un échanges menées par
                        electriciens sans frontières avec la population locale était non
                        pas que chaque habitant est de l'électricité mais qu’il priorise l’alimentation du
                        dispensaire et de l'école
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
                        Alors pour réunir notre projet et faire une bonne action de notre côté
                        nous avons décidé de créer un site web qui permettrait de vendre des éoliennes
                        créer par nos soin et les vendre pour en construire d’avantages puis en envoyer
                        au personnes qui n’ont pas acces a l'electricite
                    </p>
                    <div class="img">
                    </div>
                </div>
                <!-- <div data-aos="flip-up" data-aos-offset="300" class="paragraphe">
                  <div class="img">
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas nec
                    ipsum dignissim commodo. Pellentesque lacinia sagittis sapien at consectetur.
                    Maecenas at egestas urna. Vestibulum bibendum ultricies ex, id consectetur
                    libero pharetra in. Proin molestie sem
                  </p>
                  <div class="img">
                  </div>
                </div> -->
            </div>
        </section>
        <section class="Dessin">
            <div class="plaine-petit">
                <img src="images/montagne.png" alt="">
                <img src="images/arbre1.png" alt="">
            </div>
            <div class="plaine-grand">
                <img src="images\wind3.svg" alt="">
                <img src="images/arbre1.png" alt="">
                <img src="images/arbre2.png" alt="">
                <img src="images/arbre3.png" alt="">
                <img src="images\bush.svg" alt="">

            </div>
        </section>
    </section>
@endsection
