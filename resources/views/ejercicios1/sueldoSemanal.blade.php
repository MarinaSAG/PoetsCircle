<h1>Sueldo semanal de un trabajador</h1>
<p>Horas trabajadas: 55</p>
<p>Pago por hora: $23</p>

<?php

    $horasT = 55;
    $pagoH = 23;
    
?>

@if($horasT <= 40)
    <?php  $sueldo = $horasT * $pagoH  ?>
    <h2>El sueldo semanal es: {{$sueldo}}</h2>
@else
    <?php  $sueldo = ($horasT - 40) * ($pagoH * 2) + ($pagoH * 40) ?>
    <h2>El sueldo semanal es: $ {{$sueldo}}</h2>
@endif
