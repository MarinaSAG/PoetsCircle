<h1>Salario de un profesora lo largo de 6 años</h1>
<p>Salario inicial: $ 1500</p>
<p>Incremento anual: 10 %</p>

<?php

    $salario = 1500;
    $incremento = 0.1;
    
?>

@for($a=2; $a<8; $a++)
    <?php  $salario = $salario + $salario * $incremento  ?>
    <h2>El Salario del año {{$a}} es: {{$salario}}</h2>
@endfor
