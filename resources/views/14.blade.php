@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Altura (h): {{$h}}                  <br>
    Base: {{$base}}                    <br>
    Área del triángulo: {{$area}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
