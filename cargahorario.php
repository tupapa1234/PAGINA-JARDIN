<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 p-3">
                <form method="post" class="form-group">
                	<h1 class="text-center"style="font-family: 'Comic Sans MS', sans-serif; color:purple;">Carga horario Maestras</h1>
                	<div class="form-row">
                		<div class="form-group col-md-6">
                			<input type="text" name="naranjam" placeholder="Naranja mañana" class="form-control">
                		</div>
                		<div class="form-group col-md-6">
                			<input type="text" name="naranjat" placeholder="Naranja tarde" class="form-control">
                		</div>
                	</div>
                	<div class="form-row">
                		<div class="form-group col-md-6">
                			<input type="text" name="amarillam" placeholder="Amarillo mañana" class="form-control">
                		</div>
                		<div class="form-group col-md-6">
                			<input type="text" name="amarillat" placeholder="Amarillo tarde" class="form-control">
                		</div>
                	</div>
                	<div class="form-row">
                		<div class="form-group col-md-6">
                			<input type="text" name="violetam" placeholder="Violeta mañana" class="form-control">
                		</div>
                		<div class="form-group col-md-6">
                			<input type="text" name="violetat" placeholder="Violeta tarde" class="form-control">
                		</div>
                	</div>
                	<div class="form-row">
                		<div class="form-group col-md-6">
                			<input type="text" name="turquesam" placeholder="Turquesa mañana" class="form-control">
                		</div>
                		<div class="form-group col-md-6">
                			<input type="text" name="turquesat" placeholder="Turquesa tarde" class="form-control">
                		</div>
                	</div>
                	<div class="form-row">
                		<div class="form-group col-md-6">
                			<input type="text" name="verdem" placeholder="Verde mañana" class="form-control">
                		</div>
                		<div class="form-group col-md-6">
                			<input type="text" name="verdet" placeholder="Verde tarde" class="form-control">
                		</div>
                	</div>
                	<div class="form-group">
                		<input type="text" name="roja" placeholder="Roja" class="form-control">
                	</div>
                	<input type="submit" name="register" value="Cargar" class="btn btn-dark">
                     <a href="horario.php" class="btn btn-dark">Volver horario</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>