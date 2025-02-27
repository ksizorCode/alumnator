# :) AQUÍ APUNTAREMOS COSAS:

## PWA

- [x] llamadas en el meta
- [x] manifest.js
- [x] iconos
- [ ] service-worker.js

## \_config.php

- Listado de Constantes, Variables o Arrays a utilizar;

  - Listados de elementos de menús
    - [x] Menú principal
    - [x] Menú legal
    - [ ] Menú redes sociales

- Llamada a base de datos.

  - [ ] Consultas que devuelven un resultado (array)
  - [ ] Consultas que no devuelven nada

- Listado de funciones reutilizables:
  - [ ]debugs
    - [ ] imprime texto si debug está activo
    - [ ] imprime array si debug está activo
    - [ ] muestra que elementos se han cargado (vale la primera con mensaje)
  - [ ] cargas tipo import
  - [ ] querys mySQL
  - [x] constructor de menús

## Login

- Validación de Usuario y Contraseña que abra sesión y de acceso a apartado privado

## Contacto

- envio de email

## style.css

- Menú superior responsive (plegable tipo hamburguesa)
- Menús footer o inferiores no responsive.

$f_curso=[
 ['Nombre curso',   'text'      ,'ingrese nombre'],
 ['Profesor',       'text'      ,'ingrese profe'],
 ['Descripcion',    'textarea'  ,'ingrese dato'],
 ['Fecha inicio',   'date'      ,'ingrese dato'],
 ['Fecha fin',      'date'      ,'ingrese dato'],
 ['Duracion',       'number'    ,'ingrese dato'],
 ['Contraseña',     'password'  ,'ingrese dato'],
 ['Practicas'       'checkbox'  ,'ingrese dato']
];


function constructor_formularios(){

  echo"<form action='index.php' method='post'>";

  foreach($f_curso as $chiflu){
    echo "<label for='".simpli($chiflu[0])."'>".$chiflu[0]."</label>";
    echo"<input type='$chiflu[1]' id='simpli($chiflu[0])' name='simpli($chiflu[0])' placeholder='$chiflu[2]'>";
  }

  echo"</form>";
  }


//Convierte textos largos en minusculas guiones bajos y jutos

//echo simpli("Hola Mundo");



// echo simpli("El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja.");



function simpli($texto) {
    // Convertir a minúsculas
    $texto = strtolower($texto);
    
    // Eliminar tildes y caracteres especiales
    $texto = iconv('UTF-8', 'ASCII//TRANSLIT', $texto);
    
    // Reemplazar espacios y otros caracteres no deseados con guiones bajos
    $texto = preg_replace('/[^a-z0-9]+/', '_', $texto);
    
    // Eliminar guiones bajos al inicio y al final
    $texto = trim($texto, '_');
    
    return $texto;
}






ALUMNOS
- id alumno     
- nombre            TEXT
- apellido          T
- dni               T
- fecha nacimiento  DATE
- email             EMAIL
- foto              FILE

CURSO
- id curso
- nombre curso      TEXTO
- descripcion       TEXTAREA
- fecha inicio      DATE
- fecha fin         DATE
- duración          NUMBER
- foto curso        FILE
- practicas?        CHECKBOX

CENTRO
- id centro
- nombre centro     TEXT
- direccion         TEXT
- telefono          NUMBER
- sitio web         URL 
- gps               TEXT  
- responsable       TEXT

PROFESORES
- id profesores
- nombre profesor
- apellidos profesor
- asignatura profesor
- email profesor
- telefono profesor
- foto profesor









  echo "<form action='index.php' method='post'>';
  echo "<label for='nombre'>Nombre:</label>";
  



}