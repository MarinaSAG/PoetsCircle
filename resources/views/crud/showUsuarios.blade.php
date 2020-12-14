@extends('layouts.master')
@section('title', 'Mostrar Usuarios')
@section('header', 'Alta de Usuario')
@section('content')
    <style type="text/css">
    a { color: #ffffff; font-size: 20px; font-family: sans-serif; }
    </style>
    <a href="{{action('Crud@create')}}">Agregar un nuevo usuario</a>

    
    <center>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">idUsuario</th>
                <th scope="col">Usuario</th>
                <th scope="col">password</th>
                <th scope="col">Llave</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $user)
                <tr>
                    <th scope="row">{{$user->idUsuario}}</th>
                    <td>{{$user->Usuario}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->key}}</td>
                    <td><a href="{{action('Crud@show', ['id'=>$user->idUsuario])}}"><img src="/images/reload.png"></a></td>
                    <td><a href="{{action('Crud@destroy', ['id'=>$user->idUsuario])}}"><img src="/images/delete.png"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
    </center>
@stop

@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
