<h1>Volumen de un Cono</h1>
<p>Valor de la altura (h): 30</p>
<p>Radio: 11</p>

<?php

    $altura = 30;
    $radio = 11;
        
    $volumen = (pi() * pow($radio, 2) * $altura)/3;
?>

<h2>El volumen del Cono es: {{$volumen}}</h2>
