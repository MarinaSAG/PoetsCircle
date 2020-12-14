@extends('layouts.master')
@section('title', 'Mostrar Poetas')
@section('header', 'Registros')
@section('content')
    <style type="text/css">
    a { color: #ffffff; font-size: 20px; font-family: sans-serif; }
    </style>
    <a href="{{action('Poets@create')}}"><img src="/images/create.png"> Agregar un nuevo registro <img src="/images/create.png"></a>

    
    <center>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">poet_code</th>
                <th scope="col">first_name</th>
                <th scope="col">surname</th>
                <th scope="col">adress</th>
                <th scope="col">postcode</th>
                <th scope="col">telephone_number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($poetas as $poet)
                <tr>
                    <th scope="row">{{$poet->poet_code}}</th>
                    <td>{{$poet->first_name}}</td>
                    <td>{{$poet->surname}}</td>
                    <td>{{$poet->adress}}</td>
                    <td>{{$poet->postcode}}</td>
                    <td>{{$poet->telephone_number}}</td>
                    <td><a href="{{action('Poets@show', ['code'=>$poet->poet_code])}}"><img src="/images/reload.png"></a></td>
                    <td><a href="{{action('Poets@destroy', ['code'=>$poet->poet_code])}}"><img src="/images/delete.png"></a></td>
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
