<?php
// principios solid SRP 
// Clase de interfaz para la conversión de moneda
interface ConversorDeMonedaInterface
{
    public function convertir($cantidad, $monedaOrigen, $monedaDestino);
}

// Clase concreta para la conversión de moneda
class CalculadoraDeMoneda implements ConversorDeMonedaInterface
{
    public function convertir($cantidad, $monedaOrigen, $monedaDestino)
    {
        // Se puede agregar la lógica específica para las monedas
        
        // Conversión de moneda
        $tasaDeCambio = 0; // Tasa de cambio inicial
        
       //dolares (USD)
        if ($monedaOrigen == 'USD' && $monedaDestino == 'EUR') {
            $tasaDeCambio = 0.85;
        } elseif ($monedaOrigen == 'USD' && $monedaDestino == 'GBP') {
            $tasaDeCambio = 0.75;
        } elseif ($monedaOrigen == 'USD' && $monedaDestino == 'JPY') {
            $tasaDeCambio = 110.25;
        } elseif ($monedaOrigen == 'USD' && $monedaDestino == 'GTQ') {
            $tasaDeCambio = 7.90;
        }
        
        // Euro (EUR)
        elseif ($monedaOrigen == 'EUR' && $monedaDestino == 'USD') {
            $tasaDeCambio = 1.18;
        } elseif ($monedaOrigen == 'EUR' && $monedaDestino == 'GBP') {
            $tasaDeCambio = 0.88;
        } elseif ($monedaOrigen == 'EUR' && $monedaDestino == 'JPY') {
            $tasaDeCambio = 129.34;
        } elseif ($monedaOrigen == 'EUR' && $monedaDestino == 'GTQ') {
            $tasaDeCambio = 9.25;
        }
        
        // Libra esterlina (GBP)
        elseif ($monedaOrigen == 'GBP' && $monedaDestino == 'USD') {
            $tasaDeCambio = 1.33;
        } elseif ($monedaOrigen == 'GBP' && $monedaDestino == 'EUR') {
            $tasaDeCambio = 1.14;
        } elseif ($monedaOrigen == 'GBP' && $monedaDestino == 'JPY') {
            $tasaDeCambio = 166.43;
        }  elseif ($monedaOrigen == 'GBP' && $monedaDestino == 'GTQ') {
            $tasaDeCambio = 9.74;
        }    
        
        //yen (JPY)
        elseif ($monedaOrigen == 'JPY' && $monedaDestino == 'USD') {
            $tasaDeCambio = 0.0075;
        } elseif ($monedaOrigen == 'JPY' && $monedaDestino == 'EUR') {
            $tasaDeCambio = 0.0068;
        } elseif ($monedaOrigen == 'JPY' && $monedaDestino == 'GBP') {
            $tasaDeCambio = 0.0060 ;
        }  elseif ($monedaOrigen == 'JPY' && $monedaDestino == 'GTQ') {
            $tasaDeCambio = 0.058 ;
        }    
         

        //quetzales(GTQ)
        elseif ($monedaOrigen == 'GTQ' && $monedaDestino == 'USD') {
            $tasaDeCambio = 0.13;
        } elseif ($monedaOrigen == 'GTQ' && $monedaDestino == 'EUR') {
            $tasaDeCambio = 0.12;
        } elseif ($monedaOrigen == 'GTQ' && $monedaDestino == 'JPY') {
            $tasaDeCambio = 17.10;
        }  elseif ($monedaOrigen == 'GTQ' && $monedaDestino == 'GBP') {
            $tasaDeCambio = 0.10;
        }    


    }    

       
} 

$Cantidad= $_POST["Cantidad"];
    $unidad_actual= $_POST["monedaOrigen"];
    $unidad_a_convertir= $_POST["monedaDestino"];
     if($unidad_a_convertir=="USD"){
        $USD = new $USD();
        $resultado= $USD->convertir($Cantidad) . PHP_EOL;
        echo $resultado;
}

$Cantidad= $_POST["cantidad"];
    $unidad_actual= $_POST["monedaOrigen"];
    $unidad_a_convertir= $_POST["monedaDestino"];
     if($unidad_a_convertir=="EUR"){
        $EUR = new $EUR();
        $resultado= $EUR->convertir($Cantidad) . PHP_EOL;
        echo $resultado;
}
$Cantidad= $_POST["Cantidad"];
    $unidad_actual= $_POST["monedaOrigen"];
    $unidad_a_convertir= $_POST["monedaDestino"];
     if($unidad_a_convertir=="JPY"){
        $JPY = new $JPY();
        $resultado= $JPY->convertir($Cantidad) . PHP_EOL;
        echo $resultado;
}
$Cantidad= $_POST["cantidad"];
    $unidad_actual= $_POST["monedaOrigen"];
    $unidad_a_convertir= $_POST["monedaDestino"];
     if($unidad_a_convertir=="GBP"){
        $GBP = new $GBP();
        $resultado= $GBP->convertir($Cantidad) . PHP_EOL;
        echo $resultado;
}
$Cantidad= $_POST["cantidad"];
    $unidad_actual= $_POST["monedaOrigen"];
    $unidad_a_convertir= $_POST["monedaDestino"];
     if($unidad_a_convertir=="GTQ"){
        $GTQ = new $GTQ();
        $resultado= $GTQ->convertir($Cantidad) . PHP_EOL;
        echo $resultado;
}

?>
