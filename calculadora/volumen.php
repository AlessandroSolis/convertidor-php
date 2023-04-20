<?php
// SOLID OCP (Open/Closed Principle)
// Clase abstracta para la conversión de volumen
abstract class ConversorDeVolumen
{
    protected $unidades = array();

    // Método abstracto para la conversión de volumen
    abstract public function convertir($valor, $unidadOrigen, $unidadDestino);
}

// Clase concreta para la conversión de volumen
class CalculadoraDeVolumen extends ConversorDeVolumen
{
    public function __construct()
    {
        $this->unidades = array(
            'litro' => 1,
            'metro_cubico' => 1000,
            'galon' => 3.78541,
            'pulgada_cubica' => 0.0163871
        );
    }

    // Implementación del método abstracto para la conversión de volumen
    public function convertir($valor, $unidadOrigen, $unidadDestino)
    {
        $this->validarUnidades($unidadOrigen, $unidadDestino);

        $valorConvertido = $valor * $this->unidades[$unidadOrigen] / $this->unidades[$unidadDestino];

        return $valorConvertido;
    }

    // Método para validar las unidades
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
     if($unidad_a_convertir=="litros"){
        $litros = new $litros();
        $resultado= $litros->convertir($valor) . PHP_EOL;
        echo $resultado;       
}
$valor= $_POST["valor"];
    $unidad_actual= $_POST["unidad_origen"];
    $unidad_a_convertir= $_POST["unidad_destino"];
     if($unidad_a_convertir=="metros_cubicos"){
        $metros_cubicos = new $metros_cubicos();
        $resultado= $metros_cubicos->convertir($valor) . PHP_EOL;
        echo $resultado;       
}
$valor= $_POST["valor"];
    $unidad_actual= $_POST["unidad_origen"];
    $unidad_a_convertir= $_POST["unidad_destino"];
     if($unidad_a_convertir=="galon"){
        $galon = new $galon();
        $resultado= $galon->convertir($valor) . PHP_EOL;
        echo $resultado;       
}
$valor= $_POST["valor"];
    $unidad_actual= $_POST["unidad_origen"];
    $unidad_a_convertir= $_POST["unidad_destino"];
     if($unidad_a_convertir=="pulgada_cubica"){
        $pulgada_cubica = new $pulgada_cubica();
        $resultado= $pulgada_cubica->convertir($valor) . PHP_EOL;
        echo $resultado;       
}

// Crear una instancia de la calculadora de volumen
$conversor = new CalculadoraDeVolumen();

// Ejemplo de uso
$valor = 5; // Valor a convertir
$unidadOrigen = 'litro'; // Unidad de origen
$unidadDestino = 'metro_cubico'; // Unidad de destino

$valorConvertido = $conversor->convertir($valor, $unidadOrigen, $unidadDestino);

echo "$valor $unidadOrigen son equivalentes a $valorConvertido $unidadDestino" . PHP_EOL;


