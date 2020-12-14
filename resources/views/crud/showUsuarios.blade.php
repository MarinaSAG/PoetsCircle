@extends('layouts.master')
@section('title', 'Mostrar Usuarios')
@section('header', 'Alta de Usuario')
@section('content')
    <style type="text/css">
    a { color: #ffffff; font-size: 20px; font-family: sans-serif; }
    </style>
    <a href="{{action('Crud@create')}}"><img src="/images/create.png"> Agregar un nuevo usuario <img src="/images/create.png"></a>

    
    <center>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
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
                    <th scope="row">{{$user->Usuario}}</th>
                    <td>{{$user->password}}</td>
                    <td>{{$user->key}}</td>
                    <td><a href="{{action('Crud@show', ['id'=>$user->idUsuario])}}"><img src="/images/reload.png"></a></td>
                    <td><a href="{{action('Crud@destroy', ['id'=>$user->idUsuario])}}"><img src="/images/delete.png"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        
    </center>

    @if((session('status')))
        <div class="alert alert-dark" role="alert">
            {{session('status')}}
        </div>
    @endif
    <br>
    <br>
    <br>
    <br>
@stop

@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
