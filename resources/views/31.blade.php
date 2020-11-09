@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Salario del año 1 : $ 1500 <br>
    <?php
    for ($x=2; $x<8; $x++) {
        echo 'Salario del año ', $x, " : $ ", 
        ($incre = ($incre*0.1)+$incre), "<br>";}
    ?>
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
