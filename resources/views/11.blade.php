@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Altura (h): {{$h}}                  <br>
    Lado "a": {{$a}}                    <br>
    Lado "b": {{$b}}                    <br>
    Área del trapecio: {{$area}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
