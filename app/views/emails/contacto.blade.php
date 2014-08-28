<!DOCTYPE html>
<html>
<head>
	<title>Correo</title>
</head>
<body>
	<h1>Solicitud de información</h1>
	<p> Nombre: {{ Input::get('name') }}</p>
	<p>	Email: {{ Input::get('email') }}</p>
	<p>	Mensaje: {{ Input::get('message') }}</p>
</body>
</html>
