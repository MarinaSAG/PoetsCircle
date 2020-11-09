@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Altura (h): {{$h}}                  <br>
    Radio: {{$radio}}                    <br>
    Volumen del Cono: {{$volumen}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
