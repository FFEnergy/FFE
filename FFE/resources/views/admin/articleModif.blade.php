@extends('layouts.appAdmin')

@section('content')
  <section>

    @foreach($content as $contenue)

        <button class="accordion"><b>Bloc :</b> <?= $contenue->class_content ?>, <b>sur la page :</b>  {{$contenue->pages->libelle_pages}} </button>
        <div class="panel">
            <form>
                <h2>Titre</h2>
                <textarea class="editor form-control" name="titre-editor{{$contenue->id}}">{{$contenue->titre_content}}</textarea>
                <h2>Descritption</h2>
                <textarea class="editor form-control" name="articles-editor{{$contenue->id}}">{{$contenue->content}}</textarea>
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
