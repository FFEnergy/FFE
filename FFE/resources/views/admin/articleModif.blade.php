@extends('layouts.appAdmin')

@section('content')
  <section>

    @foreach($content as $contenue)

        <button class="accordion"><b>Bloc :</b> <?= $contenue->class_content ?>, <b>sur la page :</b>  {{$contenue->pages->libelle_pages}} </button>
        <div class="panel">
            <form method="POST" action="/requeteModifier">
                @csrf
                <h2>Titre</h2>
                <input type="hidden" name="id" value="{{$contenue->id}}">
                <textarea class="editor form-control" name="titre_content">{{$contenue->titre_content}}</textarea>
                <h2>Descritption</h2>
                <textarea class="editor form-control" name="content">{{$contenue->content}}</textarea>
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
            CKEDITOR.replace( this.name, {
              enterMode: CKEDITOR.ENTER_BR
            });
        });
    });
  </script>
@endsection
