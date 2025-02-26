<?php require "../inc/_config.php"?>
<?php include "../inc/_header.php"?>



<h1>Instalación: Crear tabla Alumnos</h1>
<p>Este apartado crea la base de datos y el contenido de la misma por primera vez.</p>

<?php 
    
    // Crear base de datos
    $sql="CREATE TABLE IF NOT EXISTS Alumnos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255),
        apellido VARCHAR(255),
        fecha_nacimiento DATE,
        email VARCHAR(255),
        curso VARCHAR(255),
        foto VARCHAR(255),
        descripcion TEXT
        );";

        // llamamos a la función que realiza la consulta y le pasamos la $sql con los parámetros de la misma
        consulta($sql,mensaje:'Tabla Alumnos creada correctamente');
?>

<ul>
    <li>PASO 1: <a href="install/install_creartabla.php">Creación de Tabla Alumnos dentro de base de DATOS Alumnator</a></li>
    <li>PASO 2: <a href="install/install_insertarDatos.php">Inserción de Datos de los Alumnos en la tabla Alumnos</a></li>
</ul>


<a href="install/install_insertarDatos.php">Siguiente paso: Insertar datos en tabla</a>



<?php include "../inc/_footer.php"?>
<?php //insertar('pie')?>

