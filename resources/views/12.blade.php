@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Lado: {{$lado}}                  <br>
    Apotema del cuadrado: {{$apotema}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
