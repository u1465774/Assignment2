@extends('layout')

@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h4></h4>
    <h1>Discussion page</h1>
    <h2>Title: {{ $card->title }}</h2>
    <h4>Contents: {{ $card->contents }}</h4>
    <h4>Card created by: {{ $card->username }}</h4>

      <ul class="list-group">
        @foreach ($card->notes as $note)
          <li class="list-group-item"><a href="/notes/{{ $note->id }}/edit"> {{ $note->body }}</a>

            <a href="/notes/{{$note->id}}/delete" class="pull-right">Delete</a>
            <a href="#" style="float:right"> {{ $note->user->username }}</a>
          </li>
        @endforeach
      </ul>

      <hr>
      <h3>Talk about the topic</h3>

        <form method="POST" action="/cards/{{ $card->id }}/notes">
          {{ csrf_field() }}
          <div class="form-group">
            <textarea name="body" class="form-control">{{ old('body') }}</textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit Note</button>
            <a href="/cards" class="pull-right">Back</a>
          </div>
        </form>

        @if (count($errors))
        <ul>
          @foreach ($errors->all() as $error)
            <li style="color:red">
              {{ $error }}
            </li>
          @endforeach
        </ul>
      @endif


      </div>
    </div>
@stop
