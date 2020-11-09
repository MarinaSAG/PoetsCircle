@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Calificación numérica: {{$calificacion}} <br>
    Calificación alfabética: {{$letra}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
