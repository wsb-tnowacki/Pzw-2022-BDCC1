@extends('layout')
@section('tytul')
O nas
@endsection
@section('naglowek')
O nas
@endsection
@section('tresc1')
Tekst treści 1
@isset($tester)
{{ $tester }}
@endisset
@endsection
@section('tresc2')
@isset($zadania)
<ol>
@foreach ($zadania as $zadanie)
    <li>{{ $zadanie }}</li>
@endforeach
</ol>
@endisset

@endsection
@section('tresc3')
@isset($taski)
<ol>
@foreach ($taski as $task)
    <li>{{ $task }}</li>
@endforeach
</ol>
@endisset
@endsection
