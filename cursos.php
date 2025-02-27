
<?php require "inc/_config.php"?>
<?php $titulo= "Insertar Nuevo Curso"?>
<?php include "inc/_header.php"?>

<?php

$f_curso=[
    ['Nombre curso',   'text'      ,'ingrese nombre'],
    ['Profesor',       'text'      ,'ingrese profe'],
    ['Descripcion',    'textarea'  ,'ingrese dato'],
    ['Fecha inicio',   'date'      ,'ingrese dato'],
    ['Fecha fin',      'date'      ,'ingrese dato'],
    ['Duracion',       'number'    ,'ingrese dato'],
    ['Contraseña',     'password'  ,'ingrese dato'],
    ['Practicas',      'checkbox'  ,'ingrese dato']
   ];

constructor_formularios($f_curso,'insertar.php',submit:'Crear nuevo curso');



   ?>


<?php include 'inc/_footer.php'; ?> 