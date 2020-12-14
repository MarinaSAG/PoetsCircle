@extends('layouts.master')
@if(isset($poet) and is_object($poet))
    @php
        $title = 'Modificación de un Registro';
        $boton = 'Actualizar';
        $poet_code = $poet->poet_code;
        $first_name = $poet->first_name;
        $surname = $poet->surname;
        $adress = $poet->adress;
        $postcode = $poet->postcode;
        $telephone_number = $poet->telephone_number;
    @endphp
@else
    @php
        $title='Alta de un Registro';
        $boton = 'Dar de alta';
        $poet_code = '';
        $first_name = '';
        $surname = '';
        $adress = '';
        $postcode = '';
        $telephone_number = '';
    @endphp
@endif

@section('title', 'Alta de Registro')
@section('header')
@section('content')
    Alta de registro
    <center>
        <form action="{{isset($poet) ? action('Poets@update') :action('Poets@store')}}" method="POST">
            {{csrf_field()}}
            @if(isset($poet) and is_object($poet))
                <input type="hidden" name="id" value="{{$poet_code}}">
            @endif
            <label for="poet_code">Poet code</label>
            <br>
            <input type="text" name="poet_code" value="{{$poet_code}}">
            <br>
            <label for="first_name">First name</label>
            <br>
            <input type="text" name="first_name" value="{{$first_name}}">
            <br>
            <label for="surname">Surname</label>
            <br>
            <input type="text" name="surname" value="{{$surname}}">
            <br>
            <label for="adress">Adress</label>
            <br>
            <input type="text" name="adress" value="{{$adress}}">
            <br>
            <label for="postcode">Postcode</label>
            <br>
            <input type="text" name="postcode" value="{{$postcode}}">
            <br>
            <label for="telephone_number">Telephone number</label>
            <br>
            <input type="text" name="telephone_number" value="{{$telephone_number}}">
            <br><br>
            <input type="submit" name="submit" value="{{$boton}}">
        </form>
        <br>
    </center>
@stop

@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
