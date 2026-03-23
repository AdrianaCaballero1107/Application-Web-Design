<h1>Crear Superhéroe</h1>

<form action="/superheroes" method="POST">
    @csrf
    <input type="text" name="real_name" placeholder="Nombre real"><br>
    <input type="text" name="hero_name" placeholder="Nombre héroe"><br>
    <input type="text" name="photo" placeholder="URL foto"><br>
    <textarea name="description" placeholder="Descripción"></textarea><br>
    <button type="submit">Guardar</button>
</form>