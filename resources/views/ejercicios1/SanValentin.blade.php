<h1>Regalo de San Valentín</h1>
<p>Dinero en posesión: 255</p>
<br>
<p>Alternativas:</p>
<p>• Tarjeta $10.00 o menos</p>
<p>• Chocolates $11.00 a $100.00</p>
<p>• Flores $101.00 a $250.00</p>
<p>• Joyas más de $251.00</p>

<?php

    $dinero = 255;
    
?>

@if($dinero <= 10)
    <h2>Alcanzas a comprar sólo una tarjeta</h2>
@elseif($dinero <= 100)
    <h2>Alcanzas a comprar chocolates</h2>
@elseif($dinero <= 250)
    <h2>Alcanzas a comprar unas bonitas flores</h2>
@else
    <h2>Puedes comprar Joyas</h2>
@endif
