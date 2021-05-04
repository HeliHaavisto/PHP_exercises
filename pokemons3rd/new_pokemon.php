<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New pokemon</title>
</head>
<body>
<h1>Make your own Pokemon</h1>
<form method="POST" action="pokemon_formatter.php">
<label for="id">Give id</label><br>
<input type="text" id="id" name="id"></input><br>

<label for="name">Give name</label><br>
<input type="text" id="name" name="name"></input><br>

<label for="type">Select type</label><br>
<select id="type" name="type">
<option value="Normal">Normal</option>
<option value="Fighting">Fighting</option>
<option value="Flying">Flying</option>
<option value="Poison">Poison</option>
<option value="Ground">Ground</option>
<option value="Rock">Rock</option>
<option value="Bug">Bug</option>
<option value="Ghost">Ghost</option>
<option value="Steel">Poison</option>
<option value="Fire">Fire</option>
<option value="Water">Water</option>
<option value="Grass">Grass</option>
<option value="Electric">Electric</option>
<option value="Psychic">Psychic</option>
<option value="Ice">Ice</option>
<option value="Dragon">Dragon</option>
<option value="Dark">Dark</option>
<option value="Fairy">Fairy</option>

</select><br>

<label for="submit"></label><br>
<button type="submit" id="submit" name="submit">Send</button>

</form>
    
</body>
</html>