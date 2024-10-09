<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['titulo']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['contenido']) >= 1  && strlen($_POST['imagen']) >= 1) {
	    $titulo = trim($_POST['titulo']);
	    $fecha = trim($_POST['fecha']);
	    $contenido = trim($_POST['contenido']);
	    $imagen = trim($_POST['imagen']);
	    $consulta = "INSERT INTO noticias(titulo, fecha, contenido, imagen) VALUES ('$titulo','$fecha','$contenido','$imagen')";
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
                			<input type="text" name="titulo" placeholder="titulo" class="form-control">
                		</div>
                		<div class="form-group col-md-6">
                			<input type="date" name="fecha" placeholder="fecha" class="form-control">
                		</div>
                	</div>
                	<div class="form-row">
                		<div class="form-group col-md-6">
                			<input type="text" name="contenido" placeholder="contenido" class="form-control">
                		</div>
                		<div class="form-group col-md-6">
                			<input type="file" name="imagen" placeholder="Imagen" class="form-control">
                		</div>
                	</div>
                	<input type="submit" name="register" value="Cargar" class="btn btn-dark">
                     <a href="horario.php" class="btn btn-dark">Volver horario</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>