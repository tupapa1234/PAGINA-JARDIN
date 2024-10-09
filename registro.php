<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['naranjam']) >= 1 && strlen($_POST['naranjat']) >= 1 && strlen($_POST['amarillam']) >= 1 && strlen($_POST['amarillat']) >= 1 && strlen($_POST['violetam']) >= 1 && strlen($_POST['violetat']) >= 1 && strlen($_POST['turquesam']) >= 1 && strlen($_POST['turquesat']) >= 1 && strlen($_POST['verdem']) >= 1 && strlen($_POST['verdet']) >= 1 && strlen($_POST['roja']) >= 1) {
	    $naranjam = trim($_POST['naranjam']);
	    $naranjat = trim($_POST['naranjat']);
	    $amarillam = trim($_POST['amarillam']);
	    $amarillat = trim($_POST['amarillat']);
	    $violetam = trim($_POST['violetam']);
	    $violetat = trim($_POST['violetat']);
	    $turquesam = trim($_POST['turquesam']);
	    $turquesat = trim($_POST['turquesat']);
	    $verdem = trim($_POST['verdem']);
	    $verdet = trim($_POST['verdet']);
	    $roja = trim($_POST['roja']);
	    $consulta = "INSERT INTO maestras(naranjam, naranjat,amarillam, amarillat, violetam, violetat, turquesam, turquesat, verdem, verdet, roja) VALUES ('$naranjam','$naranjat','$amarillam','$amarillat','$violetam','$violetat','$turquesam','$turquesat','$verdem','$verdet','$roja')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<div class="alert alert-success text-center">¡Se a cargado  correctamente!</div>
           <?php
	    } else {
	    	?> 
	    	<div class="alert alert-danger text-center">¡Ups ha ocurrido un error!</div>
           <?php
	    }
    }   else {
	    	?> 
	    	<div class="alert alert-danger text-center">¡Por favor complete los campos!</div>
           <?php
    }
}

?>