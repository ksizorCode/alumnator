<?php 
    //Función que se encargará de realizar la conexión con la Base de Datos
    //La función recivirá como parámetros el nombre del servidor, el usuario, y la contraseña
    function conexionBD($servername, $usuario, $contrasena){ 
        // Creamos la conexión con la Base de Datos
        $conn = new mysqli($servername, $username, $password);
        
        // Comprobamos la conexión con la Base de Datos
        if ($conn->connect_error) { //Si no podemos conectarnos correctamente a la Base de Datos
          //Mensaje de error por pantalla
          die("No se ha podido conectar con la Base de Datos: " . $conn->connect_error);
        }
        //En caso de que si nos podamos conectar correctamente mostramos un mensaje por pantalla 
        echo "Conexión completada correctamente";
       
        $conn->close(); //Cerramos la conexión
    }
?>