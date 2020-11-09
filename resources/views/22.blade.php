@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Horas trabajadas: {{$horas}}         <br>
    Pago por hora: $ {{$pago}}         <br>
    Sueldo total: $ {{$sueldo}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
