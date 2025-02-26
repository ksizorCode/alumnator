<?php


//Funciones reutilizables sugeridas por PharException

const DEBUG = true;

// DEBUG MODE

// Escribe un texto si DEBUG está activado
// debugTexto('Se ha cargado el apartado FOOTER');
function debugTexto($texto){
    if(DEBUG){
        echo '<div clas="alerta">$texto</div>'
    }
}

// Recorre el array con un print_r
// debugPrint_r($arrayQueLePasamos);
function debugPrint_r($array){
    if(DEBUG){
        echo '<div clas="alerta"><pre><code>';
        echo print_r($array);
        echo '</code></pre></div>'
    }
}





insertar('cabecera');
insertar('pie');

insertar('header');
insertar('footer');

insertar('aside');

insertar('cosas.php');

//especifica la carpeta donde estarán los fragmentos a incluir (includes)
const RUTA_BLOQUES ='inc/';

function insertar($elemento){
    switch ($elemento) {
        case 'cabecera':
            case 'header':
            $archivo='_header.php'
            break;
        case 'pie':
        case 'footer':
            $archivo='_footer.php'
            break;
        case 'aside':
            $archivo='_aside.php'
            break;
    
        default:
            $archivo = $elemento;
            break;
    }

    include RUTA_BLOQUES.$archivo;
}


function cabecera(){ ri_header()}
function pie(){ ri_footer()}

function _cabecera(){ ri_header()}
function _pie(){ ri_footer()}

function ri_header(){
    include RUTA_BLOQUES.'header.php';
}
function ri_footer(){
    include RUTA_BLOQUES.'footer.php';
}
