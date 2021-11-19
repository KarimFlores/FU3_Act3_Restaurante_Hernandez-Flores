<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de Empleados:</h1>
    	<input type="text" name="NOMBRES" placeholder="Nombre(s)">
		<input type="text" name="APELLIDOS" placeholder="Apellidos">
    	<input type="text" name="TELEFONO" placeholder="Telefono celular">
		<input type="email" name="CORREO" placeholder="Correo electronico">
    	<input type="submit" name="empleado">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>