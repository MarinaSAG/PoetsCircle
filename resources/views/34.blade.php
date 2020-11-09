@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
Calificaciones de los alumnos(18): 3, 9, 7, 5, 6, 10, 5, 9, 6, 9, 8, 10, 4, 
    10, 10, 9, 2. <br>
    Aprobados = {{$aprobados}} <br>
    Reprobados = {{$reprobados}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
