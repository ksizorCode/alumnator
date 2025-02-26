<?php

// Instalación en el servidor
const URL= 'http://aa.local/alumnator3';     // Cambiar este valor por la ruta de tu servidor / proyecto

// Datos de conexión con la base de datos
const HOST ='localhost';
const USER  ='root';
const PASS  ='root';
const DBNA  ='Alumnator';

// ------------------------------






//--------



// Ejemplo:
// const URL ='http://aa.local/sandbox';
// const URL ='.'; Si no sabes que poner pero no podrás subir de la carpeta install

const DEBUG = 0;     //Activar-Desactivar modo DEBUG

const TITULO_SITE='Alumnator';
const DESCRIPCION='Sistema para la administracion de alumnos en plataforma de formación.';
const INSTAGRAM='https://instagram.com/alumnator';
const BLUESKY='https://bluesky.com/alumnator';








define('DATOS', [
  'tituloSite' => "Alumnator",
  'descripcion' => "Sistema para la administración de alumnos en plataforma de formación.",
  'telefono' => "985666666",
  'movil' => "666666666",
  'redessociales' => [
      'instagram' => "https://instagram.com/alumnator",
      'bluesky' => "https://bluesky.com/alumnator",
      'youtube' => "https://youtube.com/alumnator"
  ],
  'direcciones' => [
      'gijon' => 'Calle Los Moros 55 4B',
      'oviedo' => 'Calle Uría 55 4B',
      'aviles' => 'Calle del Muelle 55 4B',
      'madrid' => 'Calle Gran Vía 55 4B'
  ]
]);

// Ejemplo de acceso a los datos:
// DATOS['direcciones']['madrid']; // Salida: Calle Gran Vía 55 4B
// D['tituloSite'];

//const DATOS_MENU=['index.php','alumnos.php','insertar.php','contacto.php','login.php'];
const DATOS_MENUPRINCIPAL=[
  //  0.nombre     1.url        2.target    3.class         4.titulo
   // ['Inicio',    'index.php',      0,      'destacado',    'Home de la web'],
    ['Alumnos',   'alumnos.php',    0,      '',             'Alumnos'],
    ['Insertar',  'insertar.php',   0,      '',             'Insertar'],
    ['Contacto',  'contacto.php',   0,      '',             'Contacto'],
    ['Login',     'login.php',      0,      '',             'Login'],
    ['Instagram', INSTAGRAM,        1,      'ext',          'Instagram'],
    ['Bluesky',   BLUESKY ,         1,      'ext',          'Bluesky'],
    ['Alumno',   'infoAlumno.php' , 0,      '',             'Alumno'],
    ['Instalar',  'install' , 0,        'admin',        'Instalación inicial de la Base de Datos'],
];
const DATOS_MENULEGAL=[
    //  0.nombre                  1.url              2.target  3.class  4.titulo
      ['Aviso legal',             'avisolegal.php',  0,        '',      ''],
      ['Politica de cookies',     'cookies.php',     0,        '',      ''],
      ['Politica de privacidad',  'privacidad.php',  0,        '',      '']
];











// FUNCIONES REUTILIZABLES - - - - - - - - - - - - - - - - - - - - - - - - 


// DEBUG MODE

// Escribe un texto si DEBUG está activado
// debug('Se ha cargado el apartado FOOTER');
function debug($texto){
    if(DEBUG){
        echo '<div class="debug">'.$texto.'</div>';
    }
}

// Recorre el array con un print_r
// debugPrint_r($arrayQueLePasamos);
function debugPrint_r($array){
    if(DEBUG){
        echo '<div class="debug"><pre><code>';
        echo print_r($array);
        echo '</code></pre></div>';
    }
}







//Constructor de menús
function menu($array=DATOS_MENUPRINCIPAL){
echo '<nav>

<!-- Checkbox que controlará la visibilidad del menú -->
<input type="checkbox" id="menu-toggle" class="menu-toggle">

<!-- Label que actuará como el icono del menú hamburguesa -->
<label for="menu-toggle" class="menu-icon">&#9776;</label>

<!-- Menú de navegación -->
<ul class="menu">';
    
   foreach($array as $item){
    
    echo "<li><a href='".URL."/$item[1]' class='$item[3]' title='$item[4] '";
    //si target=1 poner blank
     if($item[2]){ 
        echo " target='_blank'";     
     } 
        
    echo ">$item[0]</a></li>";
}
echo '</ul></nav>';
}



// Constructor de títulos
function titulo() {
  global $titulo;
  /*
  if(isset($titulo)){
   echo $titulo.' - '.TITULO_SITE;
  }
  else{
  echo TITULO_SITE;
  }
  Simplificado más bajo en formato TERNARIO
  */
  
  // Si la variable $titulo está declarada escribe $titulo + TITULO_SITE, si no sólo TITULO_SITE
  echo (isset($titulo) ? $titulo.' - ' : '') . TITULO_SITE;
}






/*
<!-- 
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
::    ____  ___   _____ ______   ____  ______   ____  ___  __________  _____::
::   / __ )/   | / ___// ____/  / __ \/ ____/  / __ \/   |/_  __/ __ \/ ___/::
::  / __  / /| | \__ \/ __/    / / / / __/    / / / / /| | / / / / / /\__ \ ::
:: / /_/ / ___ |___/ / /___   / /_/ / /___   / /_/ / ___ |/ / / /_/ /___/ / ::
::/_____/_/  |_/____/_____/  /_____/_____/  /_____/_/  |_/_/  \____//____/  ::
::                                                                          ::
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
-->
*/



// Configuración de la conexión con la base de datos y consultas
function consulta($sql, $devolver=false, $mensaje="La consulta se ha realizado correctamente"){
   
    // Crear conexión
    $conn = mysqli_connect(HOST, USER, PASS, DBNA);

    // Chequear coneción
    if (!$conn) { die("Conexión fallida: " . mysqli_connect_error()); }

    //Realizar Consulta a la Base de Datos
    $resultado = mysqli_query($conn, $sql);
    
    if($devolver){
        return $resultado;
    }
    else{
        if (mysqli_query($conn, $sql)) {
            echo "<h2>$mensaje</h2>";
            } else {
            echo "Error al realizar la consulta:" . mysqli_error($conn);
            }
    }

    //Cerramos conexión
    mysqli_close($conn);
}

