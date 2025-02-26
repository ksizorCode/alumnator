# Consultas MySQL

Con las siguientes consultas podemos realizar un CRUD

## Crear base de datos

```sql
CREATE DATABASE IF NOT EXISTS MiBaseDeDatos;
```

## Crear tabla

```sql
CREATE TABLE IF NOT EXISTS Alumnos (
id INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(255),
apellido VARCHAR(255),
fecha_nacimiento DATE,
email VARCHAR(255),
curso VARCHAR(255),
foto VARCHAR(255),
descripcion TEXT
);
```

## DESDE AQUÍ SERÍAN LAS ORDENES DEL CRUD:  ----------------

## Insertar Datos (Insertar / Crear C ) - No devuelve nada (no hay return)

```sql
INSERT INTO Alumnos (nombre, apellido, fecha_nacimiento, email, curso, foto, descripcion)
VALUES
('Paco', 'Pérez', '2000-05-15', 'juan@example.com', 'Matemáticas', 'imagenes/juan_perez.jpg', 'Alumno dedicado a las matemáticas, siempre dispuesto a ayudar a sus compañeros con problemas de álgebra y cálculo.'),
('María', 'Gómez', '1999-07-20', 'maria@example.com', 'Física', 'imagenes/maria_gomez.jpg', 'Apasionada por la física, especialmente la mecánica cuántica. Siempre busca entender cómo funcionan las cosas a nivel subatómico.'),
('Luis', 'Martínez', '2001-03-25', 'luis@example.com', 'Química', 'imagenes/luis_martinez.jpg', 'Excelente en química orgánica, le encanta experimentar con reacciones químicas en su tiempo libre.'),
('Ana', 'Sánchez', '2002-08-10', 'ana@example.com', 'Biología', 'imagenes/ana_sanchez.jpg', 'Futura bióloga, interesada en la conservación del medio ambiente y la biodiversidad.'),
('Carlos', 'Fernández', '1998-11-05', 'carlos@example.com', 'Historia', 'imagenes/carlos_fernandez.jpg', 'Gran amante de la historia, especialmente de la historia medieval y la Edad Moderna.'),
('Laura', 'Lopez', '2000-02-17', 'laura@example.com', 'Lengua', 'imagenes/laura_lopez.jpg', 'Entusiasta de la literatura clásica, le encanta leer novelas de autores como Cervantes y Shakespeare.'),
('Javier', 'Ramírez', '1999-12-30', 'javier@example.com', 'Matemáticas', 'imagenes/javier_ramirez.jpg', 'Interesado en las matemáticas aplicadas, especialmente en las que se usan en la ingeniería.'),
('Patricia', 'Hernández', '2001-06-22', 'patricia@example.com', 'Geografía', 'imagenes/patricia_hernandez.jpg', 'Curiosa por el mundo, le fascina estudiar las diversas culturas y paisajes de diferentes países.'),
('David', 'García', '2000-09-11', 'david@example.com', 'Física', 'imagenes/david_garcia.jpg', 'Apasionado por la física teórica, especialmente en áreas como la relatividad general y la cosmología.'),
('Isabel', 'Ruiz', '1999-04-14', 'isabel@example.com', 'Química', 'imagenes/isabel_ruiz.jpg', 'Le gusta investigar sobre la química detrás de los productos de uso cotidiano y cómo afectan al medio ambiente.'),
('Fernando', 'Torres', '2000-07-05', 'fernando@example.com', 'Historia', 'imagenes/fernando_torres.jpg', 'Su interés principal está en la historia antigua, especialmente en la antigua Grecia y Roma.'),
('Eva', 'Jiménez', '1999-10-23', 'eva@example.com', 'Lengua', 'imagenes/eva_jimenez.jpg', 'Le encanta escribir y participar en concursos de poesía y escritura creativa.'),
('Ricardo', 'Méndez', '2001-01-29', 'ricardo@example.com', 'Biología', 'imagenes/ricardo_mendez.jpg', 'Fascinado por la biología molecular y genética, con aspiraciones de trabajar en investigación.'),
('Carmen', 'Vázquez', '2000-04-12', 'carmen@example.com', 'Geografía', 'imagenes/carmen_vazquez.jpg', 'Estudia la geografía humana y cómo la población y los recursos afectan al medio ambiente.'),
('Alberto', 'Paredes', '1999-03-09', 'alberto@example.com', 'Matemáticas', 'imagenes/alberto_paredes.jpg', 'Apasionado de la resolución de problemas complejos y las matemáticas puras, le gusta desafiarse a sí mismo con ejercicios difíciles.');

```

## Consultar Datos - Read R - Devuelve los datos de la consulta en Array (SI nesitamos return)

```sql
SELECT id, foto, nombre, apellido, foto FROM Alumnos;
```

## Consulta espefífica de un elemento (SI nesitamos return)

```sql
SELECT \* FROM Alumnos WHERE id=3;
```

## Actualizar Datos - Update U - no devuelve nada (no nesitamos return)

```sql
UPDATE Alumnos
SET nombre = 'Francisco'
WHERE id = 1;
```
## Borrar Datos - Delete D - no devuelve nada (no nesitamos return)
```sql
DELETE FROM Alumnos WHERE id = 2;
````



Crear nuevo alumno

Fulanito de tal - Editar / Borrar / Ver
Fulanito de tal - Editar / Borrar / Ver
Fulanito de tal - Editar / Borrar / Ver
Fulanito de tal - Editar / Borrar / Ver
Fulanito de tal - Editar / Borrar / Ver
Fulanito de tal - Editar / Borrar / Ver




     $sql = "SELECT id, firstname, lastname FROM MyGuests";  
     consulta($sql,1);



function consulta($sql, $devolver=false){
   
    // Crear conexión
    $conn = mysqli_connect(HOST, USER, PASS, DBNA);

    // Chequear coneción
    if (!$conn) { die("Conexión fallida: " . mysqli_connect_error()); }

    //Realizar Consulta a la Base de Datos
    $resultado = mysqli_query($conn, $sql);
    
    if($devolver){
        return $resultado;
    }

    //Cerramos conexión
    mysqli_close($conn);

}




   