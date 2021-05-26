@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="./css/CSS/compte-style.css">
@endsection

@section('content')
  <h2>Account Settings</h2>
  <p>Change your profile and account settings</p>
  <section class="settings">
    <div class="parametres">
      <ul>
        <li id="compte" class="section actif"><i class="fas fa-user"></i><span>Compte</span></li>
        <li id="order" class="section"><i class="fas fa-shopping-cart"></i><span>Commandes</span></li>
        <li id="comment" class="section"><i class="fas fa-comments"></i><span>Commentaires</span></li>
      </ul>
    </div>
    <button type="button" name="wrapParams" id="wrapParams"><i class="fas fa-arrow-down"></i></button>
    <section class="main compte actifMain">
      <h3>General info</h3>
      <div class="content">
        <form class="fields" action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="field">
            <label for="name">NOM</label>
            <input type="text" name="name" placeholder="" value="{{ old('name', $user->name) }}">
            @error('name')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
          </div>
          {{-- <div class="field">
            <label for="prenom">PRENOM</label>
            <input type="text" name="prenom" placeholder="">
          </div>
          <div class="field">
            <label for="pseudo">PSEUDO</label>
            <input type="text" name="pseudo" placeholder="">
          </div> --}}
          <div class="field">
            <label for="email">EMAIL</label>
            <input type="email" name="email" placeholder="" value="{{ old('email', $user->email) }}">
            @error('email')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
          </div>
          <button class="button is-link">Envoyer</button>
        </form>
        <div class="draw">
          <img id="wind" src="./Images/wind3.svg" alt="">
          <img id="bush" src="./Images/bush.svg" alt="">
        </div>
      </div>
    </section>
    <section class="main order">
      <h3>Last orders</h3>
      <div class="content">
        <div class="orders">

          <div class="commande">
            <div class="upperOrder">
              <p>21/05/2021</p>
              <p>EUR 2,40</p>
            </div>
            <div class="lowerOrder">
              <img src="./Images/eolienne4.jpg" alt="">
              <h4>Windy</h4>
              <p>n°408-0718346-7437963</p>
              <a href="#">problème avec la commande</a>
            </div>
          </div>

          <div class="commande">
            <div class="upperOrder">
              <p>21/05/2021</p>
              <p>EUR 2,40</p>
            </div>
            <div class="lowerOrder">
              <img src="./Images/eolienne4.jpg" alt="">
              <h4>Windy</h4>
              <p>n°408-0718346-7437963</p>
              <a href="#">problème avec la commande</a>
            </div>
          </div>
        </div>
        <div class="draw">
          <img id="wind" src="./Images/wind3.svg" alt="">
          <img id="bush" src="./Images/bush.svg" alt="">
        </div>
      </div>
    </section>

    <section class="main comment">
      <h3>Last comments</h3>
      <div class="content">
        <div class="comments">

          <div class="commentaire">
            <div class="upperCommentaire">
              <p>21/05/2021</p>
              <span>@Vooxler</span>
              <a href="#"><i class="fas fa-trash"></i></a>
            </div>
            <div class="lowerCommentaire">
              <img src="./Images/lorenzo.jpg" alt="">
              <p>Duis aliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consectetur. Mauris sit amet consectetur dui. Etiam non vehicula diam. Fusce</p>
            </div>
          </div>

          <div class="commentaire">
            <div class="upperCommentaire">
              <p>21/05/2021</p>
              <span>@Tropico</span>
              <a href="#"><i class="fas fa-trash"></i></a>
            </div>
            <div class="lowerCommentaire">
              <img src="./Images/lorenzo.jpg" alt="">
              <p>Duis Duis aliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consectetur.Duis aliquDuisDuis aliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consectetur.Duis aliquDuisaliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consectetur.Duis aliquDuis aliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consecteturDuis aliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consecteturam sem eu tortor mattis auctor. Fusce sodales nec enim at consectetur Mauris sit amet consectetur dui. Etiam non vehicula diam. Fusce ullamcorper venenatis mauris, non iaculis sapien facilisis vel. Integer molestie nunc magna.</p>
            </div>
          </div>
          <div class="commentaire">
            <div class="upperCommentaire">
              <p>21/05/2021</p>
              <span>@Tropico</span>
              <a href="#"><i class="fas fa-trash"></i></a>
            </div>
            <div class="lowerCommentaire">
              <img src="./Images/lorenzo.jpg" alt="">
              <p>Duis aliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consectetur.Duis aliquDuis aliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consecteturDuis aliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consecteturam sem eu tortor mattis auctor. Fusce sodales nec enim at consectetur Mauris sit amet consectetur dui. Etiam non vehicula diam. Fusce ullamcorper venenatis mauris, non iaculis sapien facilisis vel. Integer molestie nunc magna.</p>
            </div>
          </div>

          <div class="commentaire">
            <div class="upperCommentaire">
              <p>21/05/2021</p>
              <span>@Tropico</span>
              <a href="#"><i class="fas fa-trash"></i></a>
            </div>
            <div class="lowerCommentaire">
              <img src="./Images/lorenzo.jpg" alt="">
              <p>Duis aliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consectetur.Duis aliquDuis aliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consecteturDuis aliquam sem eu tortor mattis auctor. Fusce sodales nec enim at consecteturam sem eu tortor mattis auctor. Fusce sodales nec enim at consectetur Mauris sit amet consectetur dui. Etiam non vehicula diam. Fusce ullamcorper venenatis mauris, non iaculis sapien facilisis vel. Integer molestie nunc magna.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </section>
@endsection
