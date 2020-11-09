<sidebar>
    @section('sidebar')
        <div class="sidenav">
            <a href="{{route('areaTrapecio')}}">Area de un trapecio</a><hr>
            <a href="{{route('apotemaCuadrado')}}">Apotema de un cuadrado</a><hr>
            <a href="{{route('volumenCono')}}">Volumen de un cono</a><hr>
            <a href="{{route('areaTriangulo')}}">Area de un triangulo</a><hr>
            <a href="{{route('circunferencia')}}">Circunferencia</a><hr>

            <a href="{{route('edadVotar')}}">Edad para votar</a><hr>
            <a href="{{route('sueldoSemanal')}}">Sueldo Semanal</a><hr>
            <a href="{{route('sanValentin')}}">Regalo de San valentín</a><hr>
            <a href="{{route('estacionamiento')}}">Tarifa de estacionamiento</a><hr>
            <a href="{{route('calificacion')}}">Calificaciones</a><hr>

            <a href="{{action('EstructurasdeControl@salarioAnual')}}">Salario Anual</a><hr>
            <a href="{{action('EstructurasdeControl@cero')}}">Cantidades a cero</a><hr>
            <a href="{{action('EstructurasdeControl@cajaRegistradora')}}">Caja registradora</a><hr>
            <a href="{{action('EstructurasdeControl@aprobados')}}">Aprobados</a><hr>
            <a href="{{action('EstructurasdeControl@tablaMultiplicar')}}">Tabla de multiplicar</a><hr>
        </div>

    @show
</sidebar>
