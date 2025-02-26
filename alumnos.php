<?php require "inc/_config.php"?>
<?php include "inc/_header.php"?>

<h2>Lista de Alumnos</h2>

<!-- Botones para cambiar la vista -->
<div>
  <button onclick="cambiarVista('lista')">Vista de Lista</button>
  <button onclick="cambiarVista('reticula')">Vista en Retícula</button>
  <button onclick="cambiarVista('tarjetas')">Vista en Tarjetas</button>
</div>

<!-- Campo de búsqueda -->
<input type="text" id="buscador" placeholder="Filtrar Alumno o curso..." onkeyup="filtrarAlumnos()">


<ul id="listaAlumnos" class="lista">

<?php
        $table = "Alumnos";
        $sql = "SELECT id, foto, nombre, apellido, curso FROM $table;";
        
        $result = consulta($sql,1);
        

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($alumno = mysqli_fetch_assoc($result)) {
            echo '<li>';
            echo '<img class="alumno" src="assets/img/uploads/' . $alumno['foto'] . '" alt="">';
            echo '<h3 class="nombre">'.$alumno['nombre'] .' '.$alumno['apellido'].'</h3>';
            echo '<p class="curso">'.$alumno['curso'].'</p>';
            echo '</li>';      }
        } else {
            echo "0 Alumnos en la base de datos. Porfavor acuda al apartado instalación.";
        }



/*

    //Comrpueba si la tabla Alumnos existe
    $checkTable = mysqli_query($conn, "SHOW TABLES LIKE '$table'");
    if (mysqli_num_rows($checkTable) == 0) {
        echo "<p>La tabla '$table' no existe. Puedes crearla en el <a href='".URL."/install'>Instalación</a></p>";
    } else {
        //Consulta SQL
        $sql = "SELECT id, foto, nombre, apellido, curso FROM $table;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($alumno = mysqli_fetch_assoc($result)) {
              echo '<li>';
              echo '<img class="alumno" src="assets/img/uploads/' . $alumno['foto'] . '" alt="">';
              echo '<h3 class="nombre">'.$alumno['nombre'] .' '.$alumno['apellido'].'</h3>';
              echo '<p class="curso">'.$alumno['curso'].'</p>';
              echo '</li>';      }
          } else {
            echo "0 Alumnos en la base de datos. Porfavor acuda al apartado instalación.";
          }
    }




   */



?>
</ul>


<script>
// Filtrar alumnos con el buscador
function filtrarAlumnos() {
    const busqueda = document.getElementById('buscador').value.toLowerCase();
    const alumnos = document.querySelectorAll('.lista li');
    
    alumnos.forEach(function(alumno) {
        const nombre = alumno.querySelector('.nombre').textContent.toLowerCase();
        const curso = alumno.querySelector('.curso').textContent.toLowerCase();
        
        if (nombre.includes(busqueda) || curso.includes(busqueda)) {
            alumno.style.display = '';
        } else {
            alumno.style.display = 'none';
        }
    });
}

// Cambiar vista de la lista
function cambiarVista(vista) {
    const lista = document.getElementById('listaAlumnos');
    
    // Eliminar todas las clases actuales
    lista.classList.remove('lista', 'reticula', 'tarjetas');
    
    // Añadir la clase correspondiente al modo de vista
    lista.classList.add(vista);
}
</script>


<?php include "inc/_footer.php"?>