<?php
//Datos que recibimos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

//Configuracion del correo
$para = 'fran.garciaa22@gmail.com';
$titulo = 'Mensaje consulta autolavado $name';

//Enviamos el correo
mail($para, $titulo, $mensaje);

//Redirigimos a la pagina contacto
return redirect()->back()->with('mensaje', 'El mensaje se ha mandado. Recibirás una respuesta por email.');


