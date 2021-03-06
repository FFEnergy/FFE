<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Page d'acceuil, l'éolienne 100% recyclé">
    <title>FFEnergy</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img\wind3.svg">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
        <!-- Feuilles de styles des pages qui se genere automatiquement -->
        @yield('style')
        <!-- Feuilles de styles du header -->
        <link rel="stylesheet" href="./css/CSS/header.css">
        <link rel="stylesheet" href="./css/CSS/footer.css">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <nav>
            <div class="container">
                <a aria-label="page d'acceuil" href="./" id="brand"><img src="img\wind.svg" alt=""><span>FFEnergy</span></a>
                <button class="burger">
                    <span class="rotate"></span>
                    <span class="rotate"></span>
                    <span class="rotate"></span>
                </button>
                <ul class="navbar-menu">
                    <li><a href="./">Accueil</a></li>
                    <li><a href="./about">A propos</a></li>
                    <li><a href="./contact">Contactez-nous</a></li>
                    <li><a href="./fiche-produit">Découvrir notre éolienne</a></li>
                    @guest
                        <li class="">
                            <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="">
                                <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                      @else
                          <li>
                              <a href="./compte">
                                  {{ Auth::user()->name }}
                              </a>
                          </li>
                      @if(Auth::user()->is_admin == 1)
                          <li>
                              <a href="./modification"><i class="far fa-edit"></i></a>
                          </li>
                      @endif
                    @endguest
                </ul>
            </div>
        </nav>


        <main>
            @yield('content')
        </main>

        <footer>
            <div>
                <img id="logoFFEnergyFooter" src=".\img\wind.svg">
                <p></p>
            </div>
            <div class="barreBlancheFooter"></div>
            <div>
                <ul class="divfooter1">
                  <li><a href="./">Accueil</a></li>
                  <li><a href="./about">A propos</a></li>
                  <li><a href="./contact">Contactez-nous</a></li>
                  <li><a href="./fiche-produit">Découvrir notre éolienne</a></li>
                  @guest
                      <li class="">
                          <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="">
                              <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                    @else
                        <li>
                            <a href="./compte">
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                    @if(Auth::user()->is_admin == 1)
                        <li>
                            <a href="./modification"><i class="far fa-edit"></i></a>
                        </li>
                    @endif
                  @endguest
                </ul>
            </div>
            <div class="barreBlancheFooter"></div>
            <div>
                <ul class="divfooter2">
                    <li>Politique De Confidentialité</li>
                    <li>Media Kit</li>
                    <li>Mention Légales</li>
                    <li>Condition Générales De Vente</li>
                </ul>
            </div>
            <div class="barreBlancheFooter"></div>
            <div>
                <img id="logoEdenSchoolFooter" src="./img/EDEN_HORI_VERT-300x136.png">
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MorphSVGPlugin.min.js"></script>
    <!-- navbar -->
    <script src="https://kit.fontawesome.com/5703a1c6f6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- navbar -->
    <script type="text/javascript">
      AOS.init();
    </script>
    <script src="JS/index.js" charset="utf-8"></script>
    <script src="JS/AboutUs.js" charset="utf-8"></script>
    <script src="JS/contact.js" charset="utf-8"></script>
    <script src="JS/compte.js" charset="utf-8"></script>
    <script src="JS/modification.js" charset="utf-8"></script>
</body>
</html>
