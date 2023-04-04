<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25Watts</title>
</head>
<body>
    <!--
    <h1>Correo Electronico</h1>
    <p>Este es el envio de correo por laravel</p>
    -->
    <h1>Se han registrado los datos en nuestro sistema</h1>
    <p>Nombre y Apellido del Interesado: {{ $details['name'] }}</p>
    <p>Correo Electrónico: {{ $details['email'] }}</p>
    <p>Celular: {{ $details['phone'] }}</p>
    <p>Mensaje: {{ $details['message'] }}</p>
    <p>Gracias por su registración en 25Watts</p>
</body>
</html>