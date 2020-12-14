@extends('layouts.master')
@if(isset($user) and is_object($user))
    @php
        $title = 'Modificación de un Usuario';
        $boton = 'Actualizar';
        $id = $user->idUsuario;
        $Usuario = $user->Usuario;
        $password = $user->password;
        $key = $user->key;
    @endphp
@else
    @php
        $title='Alta de Usuario';
        $boton = 'Dar de alta';
        $id = '';
        $Usuario = '';
        $password = '';
        $key = '';
    @endphp
@endif

@section('title', 'Alta de Usuario')
@section('header')
@section('content')
    Alta de usuario
    <center>
        <form action="{{isset($user) ? action('Crud@update') :action('Crud@store')}}" method="POST">
            {{csrf_field()}}
            @if(isset($user) and is_object($user))
                <input type="hidden" name="id" value="{{$id}}">
            @endif
            <label for="user">Usuario</label>
            <br>
            <input type="text" name="user" value="{{$Usuario}}">
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" value="{{$password}}">
            <br>
            <label for="key">Key</label>
            <br>
            <input type="text" name="key" value="{{$key}}">
            <br><br>
            <input type="submit" name="submit" value="{{$boton}}">
        </form>
        <br>
    </center>
@stop

@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
