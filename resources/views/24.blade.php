@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Horas utilizadas: {{$horas}}             <br><br>
    Tarifas:                                  <br>
    • Las dos primeras horas a $5.00 c/u.     <br>
    • Las siguientes tres a $4.00 c/u         <br>
    • Las cinco siguientes a $3.00 c/u.       <br>
    • Después de diez horas a $2.0 c/u        <br>
    <br><br>
    Debes pagar $ {{$costo}}

    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
