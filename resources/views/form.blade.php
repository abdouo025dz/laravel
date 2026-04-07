<form method="POST" action="/submit">
    @csrf
    <label for="name">Nom : </label>
    <input type="text" name="name" id="name">
    <button type="submit">Envoyer </button>
</form>
