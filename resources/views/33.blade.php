@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Monedas y billetes que hay: 500, 200, 100, 50, 20, 10, 5, 2, 5, 100, 
        1000, 10, 50, 2, 1, 1, 5, 10. <br><br>
    Dinero total: $ {{$total}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
