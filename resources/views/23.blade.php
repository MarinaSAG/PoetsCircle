@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Dinero en posesión: {{$dinero}}         <br><br>
    Alternativas:                     <br>
    • Tarjeta $10.00 o menos          <br>
    • Chocolates $11.00 a $100.00     <br>
    • Flores $101.00 a $250.00        <br>
    • Joyas más de $251.00            <br>
    <br><br>
    {{$regalo}}

    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
