@extends('layouts.app')

@section('content')
<section class="nuages">
<img class="nuage" src="..\index\images\nuage1.svg" alt="">
<img class="nuage" src="..\index\images\nuage2.svg" alt="">
<img class="nuage" src="..\index\images\nuage3.svg" alt="">
</section>
<section class="panel miseEnPlace">
  <div class="text">
    <div class="paragraphe">
      <h3>FFE</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas nec
        ipsum dignissim commodo. Pellentesque lacinia sagittis sapien at consectetur.
        Maecenas at egestas urna. Vestibulum bibendum ultricies ex, id consectetur
        libero pharetra in. Proin molestie sem
      </p>
      <p>
        Duis feugiat in purus et mattis. Proin nisl risus, eleifend sit amet nisl eu,
        tincidunt tristique lorem. Nam leo nibh, viverra ut consectetur fringilla
        , dictum eget diam. Phasellus enim quam, semper in viverra porttitor,
        semper quis leo. Integer et ultricies libero. Duis a turpis id lectus facilisis interdum.
      </p>

    </div>
  </div>
</section>
<section class="panel">
<div class="video">
  <iframe width="855" height="506" src="https://www.youtube.com/embed/2_YYA9O0f6M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</section>


<section class="panel SectionNotreEquipe">
<h2>Notre equipe</h2>

<div class="team">
  <div data-aos="fade-up" data-aos-delay="500" class="people">
    <img alt="photo de Florent" id="Florent" src="../../../../../../../Users/fdupin/Desktop/FFE/FFE-maquettes/AboutUs/Image/Florent%20Martinez.JPG">
    <h3>Florent</h3>
  </div>
  <div data-aos="fade-up" data-aos-delay="1000" class="people">
    <h3>Florian</h3>
    <img alt="photo de Florian" id="Florian" src="../../../../../../../Users/fdupin/Desktop/FFE/FFE-maquettes/AboutUs/Image/Florian%20Dupin.JPG">
  </div>
</div>


</section>
@endsection

