<?php 

include("con_db.php");

if (isset($_POST['empleado'])) {
    if (strlen($_POST['NOMBRES']) >= 1 && strlen($_POST['CORREO']) >= 1 && strlen($_POST['APELLIDOS']) >= 1 && strlen($_POST['TELEFONO']) >= 1) {
	    $name = trim($_POST['NOMBRES']);
	    $apellidos = trim($_POST['APELLIDOS']);
	    $telefono = trim($_POST['TELEFONO']);
		$email = trim($_POST['CORREO']);
	    $consulta = "INSERT INTO empleado(NOMBRES, APELLIDOS, TELEFONO, CORREO) VALUES ('$name','$apellidos','$telefono','$email')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups, ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos correctamente!</h3>
           <?php
    }
}

?>