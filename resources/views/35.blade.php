@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Tabla del: {{$numero}} <br><br>
    <?php
    for ($x=1; $x<11; $x++) {
        echo $x, " x ", $numero, " = ", ($x*$numero), "<br>";}
    ?>
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
