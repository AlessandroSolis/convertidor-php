<?php

// Clase para la conversión de tiempo
class CalculadoraDeTiempo
{
    private $factoresDeConversion; // Factores de conversión
    
    public function __construct()
    {
        // Inicializar los factores de conversión
        $this->factoresDeConversion = [
            'segundos' => 1,
            'minutos' => 60,
            'horas' => 3600,
            'dias' => 86400,
            'semanas' => 604800,
            'meses' => 2592000,
            'años' => 31536000
        ];
    }
    
    public function convertir($cantidad, $unidadOrigen, $unidadDestino)
    {
        // Validar las unidades de tiempo
        if (!isset($this->factoresDeConversion[$unidadOrigen]) || !isset($this->factoresDeConversion[$unidadDestino])) {
            throw new Exception("Unidad de tiempo no válida");
        }
        
        // Conversión de tiempo
        $factorOrigen = $this->factoresDeConversion[$unidadOrigen];
        $factorDestino = $this->factoresDeConversion[$unidadDestino];
        $tiempoConvertido = ($cantidad * $factorOrigen) / $factorDestino;
        
        return $tiempoConvertido;
    }
}

// Ejemplo de uso
$calculadoraDeTiempo = new CalculadoraDeTiempo();
$tiempoEnMinutos = $calculadoraDeTiempo->convertir(180, 'segundos', 'minutos');
echo "180 segundos son equivalentes a " . $tiempoEnMinutos . " minutos.";

$tiempoEnDias = $calculadoraDeTiempo->convertir(2, 'años', 'dias');
echo "2 años son equivalentes a " . $tiempoEnDias . " días.";

$tiempoEnSemanas = $calculadoraDeTiempo->convertir(3, 'meses', 'semanas');
echo "3 meses son equivalentes a " . $tiempoEnSemanas . " semanas.";

$tiempoEnHoras = $calculadoraDeTiempo->convertir(1, 'semanas', 'horas');
echo "1 semana es equivalente a " . $tiempoEnHoras . " horas.";

?>
