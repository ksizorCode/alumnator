
<?php require "inc/_config.php"?>
<?php $titulo= "Insertar Nuevo Profesor"?>
<?php include "inc/_header.php"?>

<?php

$f_profesores=[
    ['Nombre Profesor',   'text'       ,'ingrese nombre'],
    ['Foto profe',         'text'      ,'ingrese dato'],
    ['Fecha nacimiento',   'date'      ,'ingrese dato'],
    ['Teléfono',           'number'    ,'ingrese dato'],
    ['Email',              'email'     ,'ingrese dato'],
    ['Contraseña',         'password'  ,'ingrese dato']
   ];

constructor_formularios($f_profesores,'insertar.php',submit:'Crear nuevo profesor');



   ?>


<?php include 'inc/_footer.php'; ?> 