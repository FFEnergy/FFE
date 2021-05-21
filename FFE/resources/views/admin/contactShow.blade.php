@extends('layouts.appAdmin')

@section('messages')
  <section>

    @foreach($messages as $message)

        <div class="message">
            <form>
                <h2>Titre</h2>
                <textarea class="editor form-control" name="titre-editor{{$message->id}}">{{$message->titre_messages}}</textarea>
                <h2>Descritption</h2>
                <textarea class="editor form-control" name="articles-editor{{$message->id}}">{{$message->messages}}</textarea>
            </form>
        </div>

    @endforeach

  </section>
@endsection

@section('script')

@endsection
