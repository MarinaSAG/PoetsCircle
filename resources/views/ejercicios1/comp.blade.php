<?php
$numA = 5;
$numB = 7;
?>

<p>Número A: 5</p>
<p>Número B: 7</p>

@if($numA > $numB)
    <p>El número A es mayor</p>
@else
    <p>El número B es mayor</p>
@endif

<!--------------------------------------------------------------------->

@for($i = 0; $i<10; $i++)
   <p> el valor de i es: {{$i}}</p>
@endfor

<!--------------------------------------------------------------------->

<?php
$j=0;
?>
@while($j < 5)
    <p>El Valor de j es: {{$j}}</p>
    <?php
        $j++;
    ?>
@endwhile