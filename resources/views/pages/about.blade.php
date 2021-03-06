@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="./css/CSS/AboutUs.css">
@endsection

@section('content')
<section class="panel miseEnPlace">
  <div class="text">
    <div class="paragraphe">
      <h3>@php echo $content[3]['titre_content']; @endphp</h3>
      <p>@php echo $content[3]['content']; @endphp</p>
    </div>
  </div>
</section>
<section class="panel">
<div class="video">
  <iframe width="855" height="506" src="https://www.youtube.com/embed/2_YYA9O0f6M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</section>


<section class="SectionNotreEquipe">
<h2>La team</h2>
<div class="team">
  <div data-aos="fade-up" data-aos-delay="200" class="people">
    <img alt="photo de Florent" id="Florent" src="./img/Florent Martinez.JPG">
    <h3>Florent</h3>
  </div>
  <div data-aos="fade-up" data-aos-delay="500" class="people">
    <h3>Florian</h3>
    <img alt="photo de Florian" id="Florian" src="./img/Florian Dupin.JPG">
  </div>
</div>

@endsection
