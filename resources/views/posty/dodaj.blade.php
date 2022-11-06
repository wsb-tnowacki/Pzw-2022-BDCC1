@extends('start.layout')
@section('tytul')
Dodaj post
@endsection
@section('naglowek')
Dodwanie posta
@endsection
@section('tresc')
<form action="/posty" method="POST">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        {{-- <ul>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> --}}
       <p> Uzupełnij pola, które sa wymagane</p>
    </div>
    @endif
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" id="tytul" value="{{ old('tytul') }}" name="tytul" placeholder="Podaj tytuł postu">
    </div>
    @if ($errors->get('tytul'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('tytul') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" value="{{ old('autor') }}" name="autor" placeholder="Podaj autora">
    </div>
    @if ($errors->get('autor'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('autor') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" value="{{ old('email') }}"  id="email" name="email" placeholder="Podaj email">
    </div>
    @if ($errors->get('email'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('email') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
      <label for="tresc">Treść</label>
      <textarea class="form-control" id="tresc" rows="4" name="tresc">{{ old('tresc') }}</textarea>
    </div>
    @if ($errors->get('tresc'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('tresc') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <button type="submit" class="btn btn-primary">Dodaj posta</button>
  </form>
@endsection
