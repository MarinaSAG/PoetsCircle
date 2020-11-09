@extends('layouts.master2')
@section('title', $title)
@section('header')
    {{$header}}
    @stop
@section('content')
    Edad: {{$edad}}         <br>
    {{$apto}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
