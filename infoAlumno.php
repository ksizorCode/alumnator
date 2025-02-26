<?php require "inc/_config.php"?>
<?php include "inc/_header.php"?>
<?php

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql = "SELECT * FROM WHERE id=$id;";
  echo $sql;
        
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
    echo "No exciste información a cerca de este alumno.";
}
}

else{
  echo "No se ha pasado el identicador del alumno. Regrese a: <a href='alumos.php'>Alumnos haciendo click aquí</a> y vuelva a entar en una ficha.";
}



?>

<div class="alumno_container">
    <div class="alumno_card">
        <div class="alumno_border"></div>
          <div class="alumno_avatar">
            <img src="https://picsum.photos/id/237/200/300" alt="Logo" />
          </div>
          <hr />
          <div class="alumno_stats">
            <h2>Nombre</h2>
            <hr />
            <div>
              <p>Email</p>
              <p>Phone</p>
              <p>Curso</p>
              
            </div>
        </div>
    </div>
</div>



<?php include "inc/_footer.php"?>