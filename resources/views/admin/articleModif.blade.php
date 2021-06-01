@extends('layouts.appAdmin')

@section('content')
  <section>

    @foreach($content as $contenue)

        <button class="accordion"><b>Bloc :</b> <?= $contenue->class_content ?>, <b>sur la page :</b>  {{$contenue->pages->libelle_pages}} </button>
        <div class="panel">
            <form method="POST" action="/requeteModifier">
                @csrf
                <h2>Titre :</h2>
                @error('titre_content')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="hidden" name="id" value="{{$contenue->id}}">
<<<<<<< Updated upstream:resources/views/admin/articleModif.blade.php
                <textarea class="editor form-control" id="titre_content{{$contenue->id}}" name="titre_content">{{$contenue->titre_content}}</textarea>
                <h2>Descritption :</h2>
                @error('content')
                    <p class="error">{{ $message }}</p>
                @enderror
                <textarea class="editor form-control" id="content{{$contenue->id}}" name="content">{{$contenue->content}}</textarea>
=======
                <textarea class="editor form-control" name="titre_content">{{$contenue->titre_content}}</textarea>
                <h2>Descritption :</h2>
                <textarea class="editor form-control" name="content">{{$contenue->content}}</textarea>
>>>>>>> Stashed changes:FFE/resources/views/admin/articleModif.blade.php
                <button type="submit">Modifier</button>
            </form>
        </div>

    @endforeach
  </section>
@endsection

@section('script')
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
  <script>
    $(function(){
        $('.editor').each(function(e){
            CKEDITOR.replace( this.id, {
              enterMode: CKEDITOR.ENTER_BR
            });
        });
    });
  </script>
@endsection
