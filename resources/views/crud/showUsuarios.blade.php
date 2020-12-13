@extends('layouts.master')
@section('title', 'Mostrar Usuarios')
@section('header', 'Usuarios')
@section('content')
    <div>
        <a href="{{action('Crud@create')}}">Agregar un nuevo usuario</a>
    </div>
    
    <center>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">idUsuario</th>
                <th scope="col">Usuario</th>
                <th scope="col">password</th>
                <th scope="col">Llave</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $user);
                <tr>
                    <th scope="row">{{$user->idUsuario}}</th>
                    <td>{{$user->Usuario}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->key}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </center>
@stop

@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
