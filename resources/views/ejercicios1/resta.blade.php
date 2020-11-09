<h1>Resta de 5 números</h1>
<p>El primer número es: 100</p>
<p>El segundo número es: 50</p>
<p>El tercer número es: 20</p>
<p>El cuarto número es: 10</p>
<p>El quinto número es: 5</p>

<?php
    /*NO SE NECESITA DECLARAR UNA VARIABLE PARA UTILIZARLA
    todas las variables comienzan con $
    */
    $variableA = 100;
    $variableB = 50;
    $variableC = 20;
    $variableD = 10;
    $variableE = 5;
    $resta = $variableA - $variableB;
    $resta = $resta - $variableC;
    $resta = $resta - $variableD;
    $resta = $resta - $variableE;
    //echo $suma;

?>
<h2>El resultado es: {{$resta}}</h2>

