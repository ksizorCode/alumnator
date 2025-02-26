<?php

// Función para limpiar datos
function limpiarEntrada($conn, $dato) {
    return $conn->real_escape_string($dato);
}


// Función para insertar alumno (_insertar.php)
function insertarAlumno($conn, $nombre, $dni, $foto) {
    $sql = "INSERT INTO alumnos (nombre, dni, foto) VALUES ('$nombre', '$dni', '$foto')";
    return $conn->query($sql);
}

?>