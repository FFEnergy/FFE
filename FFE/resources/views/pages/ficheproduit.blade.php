@extends('layouts.app')

@section('content')

<section class="product">
    <section class="desc">
        <img data-aos="fade-right" alt="image de l'éolienne" src="./Images/eolienne5.jpg">
        <div class="txt">
            <h2>@php echo $content[4]['titre_content']; @endphp</h2>
            <p>@php echo $content[4]['content']; @endphp</p>
        </div>
    </section>
    <section class="nbr">
        <div class="txt">
            <ul>
                <li><i class="fas fa-bolt"></i> : 12kw</li>
                <li><i class="fas fa-wind"></i> : <5 </li>
                <li><i class="fas fa-dollar-sign"></i> : 0</li>
            </ul>
        </div>
    </section>
    <section class="carr">
        <h3>100% &nbsp;
            <span class="typer" id="main" data-words="recyclé,fait main,gratuite" data-delay="100" data-deleteDelay="1000"></span>
            <span class="cursor" data-owner="main"></span>
        </h3>
        <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
        <div class="imgs">
            <img data-aos="fade-right" alt="image de l'éolienne" src="./Images/eolienne6.jpg">
            <img data-aos="fade-left" alt="image de l'éolienne" src="./Images/eolienne3.jpg">
        </div>
    </section>
    <section class="achat">
        <button type="button" name="EnSavoirPlus" class="bouton-primaire">Acheter</button>
    </section>

</section>
@endsection
