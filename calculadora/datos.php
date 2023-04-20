<?php
// princpio solid de (Open/Closed Principle)
// Clase de interfaz para la conversión de unidades de datos
interface ConversorDeDatosInterface
{
    public function convertir($valor, $unidadOrigen, $unidadDestino);
}

// Clase concreta para la conversión de unidades de datos
class CalculadoraDeDatos implements ConversorDeDatosInterface
{
    protected $unidades = array();

    public function __construct()
    {
        // Configurar las unidades de datos y sus factores de conversión
        $this->unidades = array(
            'byte' => 1,
            'kilobyte' => 1024,
            'megabyte' => 1048576,
            'gigabyte' => 1073741824,
            'terabyte' => 1099511627776
        );
    }

    // Implementación del método de la interfaz para la conversión de unidades de datos
    public function convertir($valor, $unidadOrigen, $unidadDestino)
    {
        $this->validarUnidades($unidadOrigen, $unidadDestino);

        $valorConvertido = $valor * $this->unidades[$unidadOrigen] / $this->unidades[$unidadDestino];

        return $valorConvertido;
    }

    // Método para validar las unidades de datos
    protected function validarUnidades($unidadOrigen, $unidadDestino)
    {
        if (!array_key_exists($unidadOrigen, $this->unidades) || !array_key_exists($unidadDestino, $this->unidades)) {
            throw new Exception("Unidades inválidas.");
        }
    }
}
$valor= $_POST["valor"];
    $unidad_actual= $_POST["unidad_origen"];
    $unidad_a_convertir= $_POST["unidad_destino"];
     if($unidad_a_convertir=="byte"){
        $byte = new $byte();
        $resultado= $byte->convertir($valor) . PHP_EOL;
        echo $resultado;       
}
$valor= $_POST["valor"];
    $unidad_actual= $_POST["unidad_origen"];
    $unidad_a_convertir= $_POST["unidad_destino"];
     if($unidad_a_convertir=="kilobyte"){
        $kilobyte = new $kilobyte();
        $resultado= $kilobyte->convertir($valor) . PHP_EOL;
        echo $resultado;       
}
$valor= $_POST["valor"];
    $unidad_actual= $_POST["unidad_origen"];
    $unidad_a_convertir= $_POST["unidad_destino"];
     if($unidad_a_convertir=="megabyte"){
        $megabyte = new $megabyte();
        $resultado= $megabyte->convertir($valor) . PHP_EOL;
        echo $resultado;       
}
$valor= $_POST["valor"];
    $unidad_actual= $_POST["unidad_origen"];
    $unidad_a_convertir= $_POST["unidad_destino"];
     if($unidad_a_convertir=="gigabyte"){
        $gigabyte = new $gigabyte();
        $resultado= $gigabyte->convertir($valor) . PHP_EOL;
        echo $resultado;       
}
$valor= $_POST["valor"];
    $unidad_actual= $_POST["unidad_origen"];
    $unidad_a_convertir= $_POST["unidad_destino"];
     if($unidad_a_convertir=="terabyte"){
        $terabyte = new $terabyte();
        $resultado= $terabyte->convertir($valor) . PHP_EOL;
        echo $resultado;       
}

// Crear una instancia de la calculadora de datos
$conversor = new CalculadoraDeDatos();


$valor = ' '; 
$unidadOrigen = ' '; 
$unidadDestino = ' '; 

// Realizar la conversión
$valorConvertido = $conversor->convertir($valor, $unidadOrigen, $unidadDestino);
echo "$valor $unidadOrigen son equivalentes a $valorConvertido $unidadDestino" . PHP_EOL;

?>

