@extends('layout')

@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-3"

    <h1>{{ $card->title }}</h1>
    <h4>{{ $card->contents }}</h4>
    <h4>By {{ $card->username }}</h4>

      <ul class="list-group">
        @foreach ($card->notes as $note)
          <li class="list-group-item">{{ $note->body }}</li>
        @endforeach
      </ul>

      <hr>
      <h3> Add a new note about the car</h3>

        <form method="POST" action="/cards/{{ $card->id }}/notes">
          <div class="form-group">
            <textarea name="body" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit Note</button>
          </div>
        </form>
      </div>
    </div>
@stop
