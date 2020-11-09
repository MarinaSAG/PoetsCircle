@extends('layouts.master')
@section('title', 'Arte Conceptual')
@section('header', 'Arte Conceptual')
@section('content', 'Creaciones artísticas donde lo primordial es la importancia del concepto de la obra')
    @parent    
    <center><br><img src="/images/comediante.jpg" style="float: center;"><br><br></center>
@stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
