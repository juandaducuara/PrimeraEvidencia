    <form action="/news/update" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required value="<?= esc($news['title']) ?>"><br><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required value="<?= esc($news['title']) ?>"><br><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" cols="30" required value="<?= esc($news['title']) ?>"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>