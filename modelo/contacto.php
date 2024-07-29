<?php
$servidor = "sql101.infinityfree.com";
$dataBase = "if0_35545667_LibreriaITLA";
$user = "if0_35545667";
$password = "PYsUfZO8ieVD";

$enlace = new mysqli($servidor, $user, $password, $dataBase);

if ($enlace->connect_error) {
    die("Error de conexión: " . $enlace->connect_error);
}

if (isset($_POST['registrar'])) {
    $fecha = $_POST['fecha'];
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];

    $insertarDatos = $enlace->prepare("INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (?, ?, ?, ?, ?)");
    $insertarDatos->bind_param("sssss", $fecha, $correo, $nombre, $asunto, $comentario);

    $ejecutarInsertar = $insertarDatos->execute();

    if ($ejecutarInsertar) {
        // Limpiar los valores después de la inserción para un nuevo registro
        $_POST['fecha'] = $_POST['correo'] = $_POST['nombre'] = $_POST['asunto'] = $_POST['comentario'] = '';
    }

    $insertarDatos->close();
}

$enlace->close();
?>