<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayExpress</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php 
$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM maestras";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $naranjam = $row['naranjam'];
	    $naranjat = $row['naranjat'];
	    $amarillam = $row['amarillam'];
	    $amarillat = $row['amarillat'];
	    $violetam = $row['violetam'];
	    $violetat = $row['violetat'];
	    $turquesam = $row['turquesam'];
	    $turquesat = $row['turquesat'];
	    $verdem = $row['verdem'];
	    $verdet = $row['verdet'];
	    $roja = $row['roja'];
        
	    }
	}
}
?>
    <style>
      .nav-link {
          font-family: Comic Sans MS, sans-serif;
          font-size: 20px;
      &:hover {
          background-color: #F9E79F;
          color: #4B0082;
          text-shadow: 1px 1px 1px #ff0000;
      }
      }
       th, td {
            text-align: center;
            vertical-align: middle;
        }
        @media (max-width: 768px) {
            th, td {
                font-size: 12px;
                padding: 8px;
            }
        }
        .dropdown-item {
        background-color: #F9E79F;
        border: 1px solid #4B0082;
        border-radius: 5px;
        margin: 5px 0;
    }

    .text-gradient {
        background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082);
        -webkit-background-clip: text;
        color: transparent;
    }

    .dropdown-item:hover {
        background-color: #FFD700;
    }
    </style>
  </head>
<body>
<div class="row">
  <nav class="navbar navbar-expand-lg" style="background-color: #F9E79F;">
  <div class="container-fluid">
    <img src="img/jardin.jpg" style="width: 80px; height: 80px; border-radius:15px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="calendario.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">calendario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="actividades.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">actividades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="proyectos.php" style="background-color: #000; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">proyectos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="salasmaestras.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">salas y sus maestras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="novedades.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">novedades</a>
        </li>
        <li class="nav-item">
                  <a class="nav-link" href="index.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">inicio</a>
                </li>
</ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</div>  
<div class="row mx-auto" style="padding-bottom: 20px;">
    <div class="col-md-10 col-sm-12 mx-auto text-center">
        <h2 class="text-center mb-4" style="font-family: 'Comic Sans MS', sans-serif; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">Horario</h2>
        <div class="text-center p-2">
            <a href="cargahorario.php" class="btn btn-dark">Modificar</a>
        </div>
        <div class="table-responsive mx-auto">
            <table class="table table-bordered table-striped mx-auto">
                <thead>
                    <tr>
                        <th scope="col">Sala</th>
                        <th scope="col">Maestra</th>
                        <th scope="col">Horario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sala Naranja</td>
                        <td><?php echo $naranjam ?></td>
                        <td>8:00 - 12:00</td>
                    </tr>
                    <tr>
                        <td>Sala Naranja</td>
                        <td><?php echo $naranjat ?></td>
                        <td>13:00 - 17:00</td>
                    </tr>
                    <tr>
                        <td>Sala Amarilla</td>
                        <td><?php echo $amarillam ?></td>
                        <td>8:00 - 12:00</td>
                    </tr>
                    <tr>
                        <td>Sala Amarilla</td>
                        <td><?php echo $amarillat ?></td>
                        <td>13:00 - 17:00</td>
                    </tr>
                    <tr>
                        <td>Sala Violeta</td>
                        <td><?php echo $violetam ?></td>
                        <td>8:00 - 12:00</td>
                    </tr>
                    <tr>
                        <td>Sala Violeta</td>
                        <td><?php echo $violetat ?></td>
                        <td>13:00 - 17:00</td>
                    </tr>
                    <tr>
                        <td>Sala Turquesa</td>
                        <td><?php echo $turquesam ?></td>
                        <td>8:00 - 12:00</td>
                    </tr>
                    <tr>
                        <td>Sala Turquesa</td>
                        <td><?php echo $turquesat ?></td>
                        <td>13:00 - 17:00</td>
                    </tr>
                    <tr>
                        <td>Sala Verde</td>
                        <td><?php echo $verdem ?></td>
                        <td>8:00 - 12:00</td>
                    </tr>
                    <tr>
                        <td>Sala Verde</td>
                        <td><?php echo $verdet ?></td>
                        <td>13:00 - 17:00</td>
                    </tr>
                    <tr>
                        <td>Sala Roja (Sala Maternal de Secundaria)</td>
                        <td><?php echo $roja ?></td>
                        <td>13:00 - 17:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    </div>
    <div class="row">
    <footer class="d-flex justify-content-between align-items-center p-4 mb-0 " style="background-color: #F9E79F; width: 100%; height: 100px;">
        <p class="text-black" style="font-size: 12px; line-height: 1.5; margin: 0; padding-left: 15px;">
            . Ubicación: Buenos Aires <br>
            . Localidad: San Clemente Del Tuyu (La Costa)<br>
            . Dirección: 8 Entre 13 y 14 2462<br>
            . Teléfono: 02252 52-0417<br>
            . Email: jardindeinfantes901@telpin.com.ar
        </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.9177900200416!2d-56.72345708464099!3d-36.362770141860125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959c1b5c8ff29ba1%3A0xe120a6ff3c2a76e8!2sJard%C3%ADn%20De%20Infantes%20N%C2%BA901%20%22Constancio%20C%20Vigil%22!5e0!3m2!1ses!2sar!4v1725389874263!5m2!1ses!2sar" width="150" height="100" style="border:0; padding-right: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>
    </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>