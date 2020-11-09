@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Números utilizados (18): -3, 29, -75, -35, 16, -1, 51, 3, -5, -91, 
        875, 0, 46, 0, 0, -191, 42, 9. <br><br>
    Mayores a cero: {{$mayor}}      <br>
    Iguales a cero: {{$igual}}      <br>
    Menores a cero: {{$menor}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
