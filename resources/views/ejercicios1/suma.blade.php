<h1> Suma de dos valores</h1>
<p>El primer número es: 18</p>
<p>El segundo número es: 25</p>

<?php
    /*NO SE NECESITA DECLARAR UNA VARIABLE PARA UTILIZARLA
    todas las variables comienzan con $
    */
    $variable = 18;
    $suma = $variable + 25;
    //echo $suma;

?>
<h2>El resultado es: {{$suma}}</h2>

@if($variable <= 18)
    <p>Eres menor de edad</p>
@else
    <p>Eres mayor de edad</p>
@endif

<!--------------------------------------------------------------------->

<?php
$menu = 3;
?>
@switch($menu)
    @case(1)
        Hamburguesa sencilla
        @break
    @case(2)
        Hamburguesa doble
        @break
    @case(3)
        Hamburguesa triple
        @break
    @default
        Lechuga
@endswitch