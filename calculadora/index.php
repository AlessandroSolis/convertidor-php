<!DOCTYPE html>
<html>
<head>

	<title>Conversor de unidades</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>


	<h1>Conversor de unidades </h1>
	<H3>Medida de longitud</H3>
	<form method="post" action="longitud.php">
		<label for="input_valor">Ingrese el valor:</label>
		<input type="text" id="valor" name="valor" required>
		<br>
		<label for="select_unidad_origen">Unidad de origen:</label>
		<select id="unidad_origen" name="unidad_origen" required>
			<option value="metros">Metros</option>
			<option value="kilometros">Kilómetros</option>
			<option value="pies">Pies</option>
			<option value="pulgadas">Pulgadas</option>
		</select>
		<br>
		<label for="select_unidad_destino">Unidad de destino:</label>
		<select id="unidad_destino" name="unidad_destino" required>
			<option value="metros">Metros</option>
			<option value="kilometros">Kilómetros</option>
			<option value="pies">Pies</option>
			<option value="pulgadas">Pulgadas</option>
		</select>
		<br>
		<button type="submit">Convertir</button>
	</form>

	<h3>Medida de Masa</h3>
    <form method="post" action="masa.php">
		<label for="input_valor">Ingrese el valor:</label>
		<input type="text" id="valor" name="valor" required>
		<br>
		<label for="select_unidad_origen">UnidadOrigen:</label>
		<select id="select_unidad_origen" name="unidadorigen" required>
			<option value="Gramos">Gramos</option>
			<option value="Onzas">Onzas</option>
			<option value="Libras">Libras</option>
			<option value="Kilogramos">Kilogramos</option>
		</select>
		<br>
		<label for="select_unidad_destino">UnidadDestino:</label>
		<select id="select_unidad_destino" name="unidadDestino" required>
			<option value="Gramos">Gramos</option>
			<option value="Onzas">Onzas</option>
			<option value="Libras">Libras</option>
			<option value="Kilogramos">Kilogramos</option>
		</select>
		<br>
		<button type="submit">Convertir</button>
	</form>
	<h3>Medida de Moneda</h3>
    <form method="post" action="moneda.php">
		<label for="input_valor">Ingrese el valor:</label>
		<input type="text" id="input_valor" name="cantidad" required>
		<br>
		<label for="select_unidad_origen">monedaOrigen:</label>
		<select id="select_unidad_origen" name="monedaOrigen" required>
			<option value="USD">USD</option>
			<option value="EUR">EUR</option>
			<option value="GBP">GBP</option>
			<option value="JPY">JPY</option>
            <option value="GTQ">GTQ</option>
		</select>
		<br>
		<label for="select_unidad_destino">monedaDestino:</label>
		<select id="select_unidad_destino" name="monedaDestino" required>
			<option value="USD">USD</option>
			<option value="EUR">EUR</option>
			<option value="GBP">GBP</option>
			<option value="JPY">JPY</option>
            <option value="GTQ">GTQ</option>
		</select>
		<br>
		<button type="submit">Convertir</button>
	</form>
	<h3>Medida de Tiempo</h3>
    <form method="post" action="Tiempo.php">
		<label for="input_valor">Ingrese el valor:</label>
		<input type="text" id="input_valor" name="cantidad" required>
		<br>
		<label for="select_unidad_origen">UnidadOrigen:</label>
		<select id="select_unidad_origen" name="UnidadOrigen" required>
			<option value="segundos">segundos</option>
			<option value="minutos">minutos</option>
			<option value="horas">horas</option>
			<option value="dias">dias</option>
            <option value="semanas">semanas</option>
            <option value="meses">meses</option>
            <option value="años">años</option>
		</select>
		<br>
		<label for="select_unidad_destino">UnidadDestino:</label>
		<select id="select_unidad_destino" name="UnidadDestino" required>
			<option value="segundos">segundos</option>
			<option value="minutos">minutos</option>
			<option value="horas">hora</option>
			<option value="dias">dias</option>
            <option value="semanas">semanas</option>
            <option value="meses">meses</option>
            <option value="años">años</option>
		</select>
		<br>
		<button type="submit">Convertir</button>
	</form>
	<h3>Medida de Volumen</h3>
    <form method="post" action="volumen.php">
		<label for="input_valor">Ingrese el valor:</label>
		<input type="text" id="input_valor" name="valor" required>
		<br>
		<label for="select_unidad_origen">UnidadOrigen:</label>
		<select id="select_unidad_origen" name="unidadorigen" required>
			<option value="litro">litro</option>
			<option value="metro_cubicos">metro_cubicos</option>
			<option value="galon">galon</option>
			<option value="Pulgada_cubica">Pulgada_cubica</option>
		</select>
		<br>
		<label for="select_unidad_destino">UnidadDestino:</label>
		<select id="select_unidad_destino" name="unidadDestino" required>
        <option value="litro">litro</option>
			<option value="metro_cubicos">metro_cubicos</option>
			<option value="galon">galon</option>
			<option value="Pulgada_cubica">Pulgada_cubica</option>
		</select>
		<br>
		<button type="submit">Convertir</button>
	</form>	
	<h3>Medida de Datos</h3>
    <form method="post" action="datos.php">
		<label for="input_valor">Ingrese el valor:</label>
		<input type="text" id="input_valor" name="valor" required>
		<br>
		<label for="select_unidad_origen">UnidadOrigen:</label>
		<select id="select_unidad_origen" name="unidadorigen" required>
			<option value="byte">byte</option>
			<option value="kilobyte">kilobyte</option>
			<option value="megabyte">megabyte</option>
			<option value="gigabyte">gigabyte</option>
            <option value="terabyte">terabyte</option>
		</select>
		<br>
		<label for="select_unidad_destino">UnidadDestino:</label>
		<select id="select_unidad_destino" name="unidadDestino" required>
            <option value="byte">byte</option>
			<option value="kilobyte">kilobyte</option>
			<option value="megabyte">megabyte</option>
			<option value="gigabyte">gigabyte</option>
            <option value="terabyte">terabyte</option>
        </select>
		<br>
		<button type="submit">Convertir</button>
	</form>
 <footer>
	<div class="integrantes">
		<p>
			Alessandro Solis, Carolina Nathalie, Alexis Alejandro , Saul Daniel.
		</p>
	</div>
 </footer>


</body>
</html>