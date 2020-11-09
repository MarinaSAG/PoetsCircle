<h1>Tarifas de estacionamiento</h1>
<p>Horas utilizadas: 11</p>
<br>
<p>Tarifas:</p>
<p>• Las dos primeras horas a $5.00 c/u.</p>
<p>• Las siguientes tres a $4.00 c/u</p>
<p>• Las cinco siguientes a $3.00 c/u.</p>
<p>• Después de diez horas a $2.0 c/u</p>

<?php
    $horasU = 11;
?>

@if($horasU <= 2)
    <?php  $costo = $horasU * 5  ?>
    <h2>Debes pagar $ {{$costo}}</h2>
@elseif($horasU <= 5)
    <?php  $costo = (($horasU - 2) * 4) + (2 * 5)  ?>
    <h2>Debes pagar $ {{$costo}}</h2>
@elseif($horasU <= 10)
    <?php  $costo = (($horasU - 5) * 3) + (3 * 4) + (2 * 5)  ?>
    <h2>Debes pagar $ {{$costo}}</h2>
@else
    <?php  $costo = (($horasU - 10) * 2) + (5 * 3) + (3 * 4) + (2 * 5)  ?>
    <h2>Debes pagar $ {{$costo}}</h2>
@endif
