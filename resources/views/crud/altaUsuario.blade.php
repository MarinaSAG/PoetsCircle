@extends('layouts.master')
@section('title', 'Alta de Usuario')
@section('header', 'Alta de Usuario')
@section('content')
    Alta de usuario
    @php
    dd($user)
    @endphp
    <center>
        <form action="{{action('Crud@store')}}" method="POST">
            {{csrf_field()}}
            <label for="user">Usuario</label>
            <br>
            <input type="text" name="user">
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password">
            <br>
            <label for="key">Key</label>
            <br>
            <input type="text" name="key">
            <br><br>
            <input type="submit" name="submit" value="submit">
        </form>
        <br>
    </center>
@stop

@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
