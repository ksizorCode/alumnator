<?php
// 1. OBTENCIÓN DE DATOS DEL FORMULARIO
// Obtener los datos del formulario GET/POST
$nombre =       $_POST['nombre'];
$apellidos =    $_POST['apellidos'];
$fecha =        $_POST['fecha_nacimiento'];
$email =        $_POST['email'];
$curso =        $_POST['curso'];
$foto =         $_POST['foto'];
$descripcion =  $_POST['descripcion'];


// 2. CONEXIÓN Y ACCIONES CON BASE DE DATOS
// Conectar a la base de datos
$conn = mysqli_connect($host, $user, $pass, $dbna);

    // Verificar conexión
    if (!$conn) {
        die("Conexión fallida: ".mysqli_connect_error());
    }



// Manejo del archivo subido
$foto = "";
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $ruta_destino = 'assets/img/uploads/';
    if (!is_dir($ruta_destino)) {
        mkdir($ruta_destino, 0777, true);
    }

    $nombre_archivo = basename($_FILES['foto']['name']);
    $ruta_completa = $ruta_destino . $nombre_archivo;

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_completa)) {
        $foto = $ruta_completa; // Guardamos la ruta para insertar en la BD
    } else {
        die("Error al subir el archivo.");
    }
}



// Escapar los valores para prevenir inyecciones SQL
$nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
$apellidos = mysqli_real_escape_string($conn, $_POST['apellidos']);
$fecha = mysqli_real_escape_string($conn, $_POST['fecha_nacimiento']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$curso = mysqli_real_escape_string($conn, $_POST['curso']);
$foto = mysqli_real_escape_string($conn, $_POST[$nombre_archivo]);
$descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);

// Insertar en la base de datos
$sql = "INSERT INTO alumnos (nombre, apellido, fecha_nacimiento, email, curso, foto, descripcion)
VALUES ('$nombre', '$apellidos', '$fecha', '$email', '$curso', '$nombre_archivo', '$descripcion')";

if ($conn->query($sql) === TRUE) {
    header('Location: insertar-final.php');
    echo "Alumno insertado correctamente <a href='index.php'>Volver al inicio</a>";
} else {
    echo "Error: " . $conn->error;
}

// Cerrar conexión
mysqli_close($conn);
?>
