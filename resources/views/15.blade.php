@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Radio: {{$r}}                  <br>
    Circunferencia del círculo: {{$circun}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
