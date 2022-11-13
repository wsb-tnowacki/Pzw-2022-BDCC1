@extends('start.layout')
@section('tytul')
Szczegóły postu
@endsection
@section('naglowek')
Szczegóły postu
@endsection
@section('tresc')
<form action="{{ route('posty.index') }}" method="GET">
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" id="tytul" value="{{ $post->tytul }}" name="tytul" disabled="disabled">
    </div>
    <div>
        Data powstania postu: <b>{{ $post->created_at }}</b><br />
        Data modyfikacji postu: <b>{{ $post->updated_at }}</b>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" value="{{ $post->autor }}" name="autor" disabled="disabled">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" value="{{ $post->email }}"  id="email" name="email" disabled="disabled">
    </div>
    <div class="form-group">
      <label for="tresc">Treść</label>
      <textarea class="form-control" id="tresc" rows="4" name="tresc" disabled="disabled"> {{ $post->tresc }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Powrót do listy</button>
  </form>
@endsection
