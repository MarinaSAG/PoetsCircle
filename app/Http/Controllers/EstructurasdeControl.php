<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstructurasdeControl extends Controller
{
    //
    public function areaTrapecio(){
        $altura=8;
        $ladoA=12; 
        $ladoB=9;
        
        $area = $altura*(($ladoA+$ladoB)/2);
        return view('11', ['h'=>$altura, 'a'=>$ladoA, 'b'=>$ladoB,
            'area'=> $area,
            'title' => '1.1 - Área de un trapecio',
            'header' => 'Área de un trapecio']);
    }

    public function apotemaCuadrado(){
        $lado=16;

        $apotema = $lado/2;
        return view('12', ['lado'=>$lado, 'apotema'=> $apotema,
            'title' => '1.2 - Apotema de un cuadrado',
            'header' => 'Apotema de un cuadrado']);
    }

    public function volumenCono(){
        $altura=30;
        $radio=11;
        
        $volumen = (pi() * pow($radio, 2) * $altura)/3;
        return view('13', ['h'=>$altura, 'radio'=>$radio,
            'volumen'=> $volumen,
            'title' => '1.3 - Volumen de un cono',
            'header' => 'Volumen de un cono']);
    }

    public function areaTriangulo(){
        $altura=8; 
        $base=12;
        
        $area = ($altura*$base)/2;
        return view('14', ['h'=>$altura, 'base'=>$base,
            'area'=> $area,
            'title' => '1.4 - Área de un triángulo',
            'header' => 'Área de un triángulo']);
    }

    public function circunferencia(){
        $radio=7;
    
        $circunferencia = 2*pi()*$radio;
        return view('15', ['r'=>$radio, 
            'circun'=> $circunferencia,
            'title' => '1.5 Circunferencia de un círculo',
            'header' => 'Circunferencia de un círculo']);
    }

//-----------------------------//

    public function edadVotar(){
        $edad=19;
    
        if ($edad <= 18) {
            $apto = 'No puedes votar aún';}
        else
            $apto = 'Ya puedes votar';
    
        return view('21') 
            ->with('title', '2.1 Edad para votar')
            ->with('header', 'Edad para votar')
            ->with('edad', $edad)
            ->with('apto', $apto);
    }

    public function sueldoSemanal(){
        $horasT = 55;
        $pagoH = 23;
        
        if ($horasT <= 40) {
            $sueldo = $horasT * $pagoH;}
        else
            $sueldo = ($horasT - 40) * ($pagoH * 2) + ($pagoH * 40);
    
        return view('22') 
            ->with('title', '2.2 Sueldo semanal')
            ->with('header', 'Sueldo Semanal')
            ->with('horas', $horasT)
            ->with('pago', $pagoH)
            ->with('sueldo', $sueldo);
    }

    public function sanValentin(){
        $dinero = 255;
    
        if ($dinero <= 10) {
            $regalo = 'Alcanzas a comprar sólo una tarjeta'; }
        elseif ($dinero <= 100) {
            $regalo = 'Alcanzas a comprar chocolates';}
        elseif ($dinero <= 250) {
            $regalo = 'Alcanzas a comprar unas bonitas flores';}
        else
            $regalo = 'Puedes comprar Joyas';
    
        return view('23') 
            ->with('title', '2.3 Regalo de San Valentin')
            ->with('header', 'Regalo de San Valentin')
            ->with('dinero', $dinero)
            ->with('regalo', $regalo);
    }

    public function estacionamiento(){
        $horas = 11;
    
        if ($horas <= 2) {
            $costo = $horas * 5;}
        elseif ($horas <= 5) {
            $costo = (($horas - 2) * 4) + (2 * 5);}
        elseif ($horas <= 10) {
            $costo = (($horas - 5) * 3) + (3 * 4) + (2 * 5);}
        else
            $costo = (($horas - 10) * 2) + (5 * 3) + (3 * 4) + (2 * 5);
    
        return view('24') 
            ->with('title', '2.4 Tarifa de un estacionamiento')
            ->with('header', 'Tarifa de un estacionamiento')
            ->with('horas', $horas)
            ->with('costo', $costo);
    }

    public function calificacion(){
        $calif = 9;
    
        if ($calif <= 5 && $calif >= 0) {
            $letra = 'F';}
        elseif ($calif <= 7) {
            $letra = 'D';}
        elseif ($calif == 8) {
            $letra = 'C';}
        elseif ($calif == 9) {
            $letra = 'B';}
        else
            $letra = 'A';
    
        return view('25') 
            ->with('title', '2.5 Calificaciones')
            ->with('header', 'Calificaciones')
            ->with('calificacion', $calif)
            ->with('letra', $letra);
    }

//-----------------------------//

    public function salarioAnual(){
        $incre = 1500;

        return view('31', [
            'title' => '3.1 Salario de un profesor',
            'header' => 'Salario de un profesor',
            'incre' => $incre
        ]);
    }

    public function cero(){
        $numeros = [-3, 29, -75, -35, 16, -1, 51, 3, -5, -91, 875, 0, 46, 
        0, 0, -191, 42, 9];
        $mayor = 0;
        $igual = 0;
        $menor = 0;
        
        foreach ($numeros as $n) {
            if ($n < 0){
                $menor++;
            }
            elseif($n > 0){
                $mayor++;}
            else
                $igual++;
        }

        return view('32', [
            'title' => '3.2 Números a cero',
            'header' => 'Números mayores, menores e iguales a cero',
            'mayor' => $mayor,
            'igual' => $igual,
            'menor' => $menor
        ]);
    }

    public function cajaRegistradora(){
        $billetes = [500, 200, 100, 50, 20, 10, 5, 2, 5, 100, 1000, 10, 50, 
        2, 1, 1, 5, 10];
        $total = 0;
        
        foreach ($billetes as $d) {
            $total = $total + $d;
        }

        return view('33', [
            'title' => '3.3 Caja registradora',
            'header' => 'Caja registradora',
            'total' => $total
        ]);
    }

    public function aprobados(){
        $calificaciones = [3, 9, 7, 5, 6, 10, 5, 9, 6, 9, 8, 10, 4, 10, 
        10, 9, 2];
        $reprobados = 0;
        $aprobados = 0;

        foreach ($calificaciones as $c) {
            if ($c < 6){
                $reprobados++;
            }
            else
                $aprobados++;
        }

        return view('34', [
            'title' => '3.4 Aprobados y reprobados',
            'header' => 'Aprobados y reprobados',
            'reprobados' => $reprobados,
            'aprobados' => $aprobados
        ]);
    }

    public function tablaMultiplicar(){
        $numero = 7;

        return view('35', [
            'title' => '3.5 Tabla de multiplicar',
            'header' => 'Tabla de multiplicar',
            'numero' => $numero
        ]);
        }


}
