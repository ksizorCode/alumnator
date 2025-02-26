<?$titulo="Contacto"?>
<?php require "inc/_config.php"?>
<?php include "inc/_header.php"?>

<section id="contacto">
        <h2>Déjanos tus datos y te reponderemos a la mayor brevedad</h2>
        <form action="contacto.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellidos">Apellidos:</label>
            <textarea id="text" name="text" required></textarea>

            <label for="email">E-mail:</label>
            <textarea id="text" name="text" required></textarea>

            <label for="asunto">Asunto:</label>
            <textarea id="text" name="text" required></textarea>

            <button type="submit">Enviar</button>
        </form>

        <div id="ubicacion">
        <h3>Nuestra ubicación</h3>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5784.564361761694!2d-5.709832824532592!3d43.53815947110784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd367da18ea42b31%3A0x2ebdd5733b66d3d9!2sDicampus!5e0!3m2!1ses!2ses!4v1740140481224!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>

    </section>




<?php include "inc/_footer.php"?>