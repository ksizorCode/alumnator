
<?php require "inc/_config.php"?>
<?php $titulo= "Formulario de Acceso"?>
<?php include "inc/_header.php"?>


<form action="" method="post">
    <label for="user">Usuario:</label>
    <input type="text" id="user" name="user" required>    
    <label for="pass">Contraseña:</label>
    <input type="password" id="pass" name="pass" required>    
    <input type="submit" value="Iniciar">
</form>

<?php include 'inc/_footer.php'; ?> 