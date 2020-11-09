<h1>Aprobados y reprobados</h1>
<p>Calificaciones de los alumnos(18): 3, 9, 7, 5, 6, 10, 5, 9, 6, 9, 8, 10, 4, 10, 10, 
9, 2.</p>

<?php

    $calificaciones = array(3, 9, 7, 5, 6, 10, 5, 9, 6, 9, 8, 10, 4, 10, 10, 9, 2);
    $aprobados = 0;
    $reprobados = 0;
?>

@foreach ($calificaciones as $cal)
    @if($cal > 5)
        <?php  $aprobados++;  ?>
    @else
        <?php  $reprobados++;  ?>
    @endif
@endforeach

<h2>Aprobados = {{$aprobados}}</h2>
<h2>Reprobados = {{$reprobados}}</h2>
