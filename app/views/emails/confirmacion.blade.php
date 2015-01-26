<!DOCTYPE html>
<html>
<head>
	<title>Correo</title>
</head>
<body>
	<h1>Confirmación evento  {{ $evento }}</h1>
	<p>Mediante el siguiente correo se formaliza el evento {{ $evento }}</p> 
	<p>confirmando la presencia del consultor {{ $consultor }}
	<p>en la siguiente dirección: {{ $direccion }}</p> 
	<p>iniciando el día: {{ $inicio }}</p> 
	<p>y finalizando el día: {{ $fin }}</p>
</body>
</html>