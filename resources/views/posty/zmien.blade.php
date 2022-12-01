@extends('start.layout')
@section('tytul')
Edytuj post
@endsection
@section('naglowek')
Edytowanie posta
@endsection
@section('tresc')
<form action="{{ route('posty.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
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
      <input type="text" class="form-control" id="tytul" value="@if(old('tytul') !== null){{ old('tytul') }}@else{{ $post->tytul }}@endif" name="tytul" placeholder="Podaj tytuł postu">
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
        <input type="text" class="form-control" id="autor" value="@if(old('autor') !== null){{ old('autor') }}@else{{ $post->autor }}@endif" name="autor" placeholder="Podaj autora">
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
        <input type="text" class="form-control" value="@if(old('email') !== null){{ old('email') }}@else{{ $post->email }}@endif"  id="email" name="email" placeholder="Podaj email">
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
      <textarea class="form-control" id="tresc" rows="4" name="tresc">@if(old('tresc') !== null){{ old('tresc') }}@else{{ $post->tresc }}@endif</textarea>
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
    <a href="{{ route('posty.index') }}"><button type="button" class="btn btn-primary m-1">Powrót do listy</button></a>
    <button type="submit" class="btn btn-success m-1">Zmień posta</button>
  </form>
@endsection
