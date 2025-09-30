<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un personnage</title>
</head>
<body>
    <h1>Ajouter un personnage</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('characters.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nom :</label>
        <input type="text" name="nom" required><br><br>

        <label>Prénom :</label>
        <input type="text" name="prenom" required><br><br>

        <label>Image :</label>
        <input type="file" name="picture"><br><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
