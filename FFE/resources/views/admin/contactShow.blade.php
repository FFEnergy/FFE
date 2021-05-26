@extends('layouts.appAdmin')

@section('content')
  <section>
    <ul class="contacts">
      @foreach($messages as $message)

          <li class="contact">
            <form class="" action="{{ route('contact.resp') }}" method="post">
              @csrf
              <ul>
                <li><h6>Nom : </h6><p>{{$message->firstname}} {{$message->name}}</p></li>
                <li><h6>Email : </h6><a href="#">{{$message->email}}</a></li>
                <input type="hidden" name="email" value="{{$message->email}}">
                <li><h6>Telephone : </h6><p>{{$message->telephone}}</p></li>
                <li><h6>Message : </h6><p>{{$message->message}}</p></li>
                <li><h6>Date : </h6><p>{{$message->created_at}}</p></li>
              </ul>
              <textarea name="message" rows="5" cols="80"></textarea>
              <button type="submit" name="button"><i class="fas fa-reply"></i></button>
            </form>
          </li>

      @endforeach
    </ul>
  </section>
@endsection

@section('script')

@endsection
