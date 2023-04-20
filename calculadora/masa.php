<?php
// principio de Responsabilidad Única (SRP)
class ConversorDeMasa
{
    private $unidades = array(
        'gramo' => 1,
        'kilogramo' => 1000,
        'onza' => 28.3495,
        'libra' => 453.592
    );

    public function convertir($valor, $unidadOrigen, $unidadDestino)
    {
        if (!array_key_exists($unidadOrigen, $this->unidades) || !array_key_exists($unidadDestino, $this->unidades)) {
            throw new Exception("Unidades inválidas.");
        }

        $gramos = $valor * $this->unidades[$unidadOrigen];
        $valorConvertido = $gramos / $this->unidades[$unidadDestino];

        return $valorConvertido;
    }
}

// Uso de la calculadora de masa

$conversor = new ConversorDeMasa();

// Leer los valores de masa ingresados por el usuario
$valor = readline("Ingresa el valor de masa: "); // Valor de masa
$unidadOrigen = readline("Ingresa la unidad de masa de origen: "); // Unidad de masa de origen
$unidadDestino = readline("Ingresa la unidad de masa de destino: "); // Unidad de masa de destino

// Realizar la conversión
$valorConvertido = $conversor->convertir($valor, $unidadOrigen, $unidadDestino);

// Mostrar el resultado
echo "$valor $unidadOrigen son equivalentes a $valorConvertido $unidadDestino" . PHP_EOL;

?>

