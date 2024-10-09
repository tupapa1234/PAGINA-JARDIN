<?php
include("conex.php");
$ids =  $_POST['id'];
$sala =  $_POST['sala'];
$turno =  $_POST['turno'];
$maes =  $_POST['maestra'];
$imgs = file_get_contents($_FILES["conte"]["tmp_name"]);

$sql = "UPDATE horarios SET sala = ?, turno = ?, maestra = ?, imagen = ? WHERE id = ?";

$stmt = $conexion->prepare($sql);
if ($stmt) {

    $stmt->bind_param("ssssi", $titl, $fech, $maes, $imgs, $ids);

    if ($stmt->execute()) {
        echo '<script>alert("Se cargó correctamente");</script>';
        echo '<script>wi
ndow.history.go(-2);</script>';
    } else {
        echo '<script>alert("No se cargó correctamente: ' . $stmt->error . '");</script>';
        echo '<script>window.history.go(-1);</script>';
    }

    $stmt->close();
} else {
    echo '<script>alert("No se pudo preparar la declaración: ' . $conexion->error . '");</script>';
    echo '<script>window.history.go(-1);</script>';
}

$conexion->close();
?>