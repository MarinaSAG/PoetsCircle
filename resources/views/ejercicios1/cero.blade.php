<h1>Números menores, iguales y mayores a cero</h1>
<p>Números utilizados (18): -3, 29, -75, -35, 16, -1, 51, 3, -5, -91, 875, 0, 46, 0, 
0, -191, 42, 9.</p>

<?php

    $numeros = array(-3, 29, -75, -35, 16, -1, 51, 3, -5, -91, 875, 0, 46, 0, 0, -191, 
    42, 9);
    $mayor = 0;
    $igual = 0;
    $menor = 0;
?>

@foreach ($numeros as $n)
    @if($n < 0)
        <?php  $menor=$menor+1;  ?>
    @elseif($n > 0)
        <?php  $mayor=$mayor+1;  ?>
    @else
        <?php  $igual=$igual+1;  ?>
    @endif
@endforeach

<h2>Mayores a cero = {{$mayor}}</h2>
<h2>Iguales a cero = {{$igual}}</h2>
<h2>Menores a cero = {{$menor}}</h2>
