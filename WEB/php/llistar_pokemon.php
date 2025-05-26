<?php
header('Content-Type: application/json');
require_once 'connexio.php';

$sql = "SELECT ID_pokedex AS id, Nom FROM pokedex ORDER BY Nom ASC";
$result = $conn->query($sql);

$pokemons = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pokemons[] = $row;
    }
}

echo json_encode($pokemons);
$conn->close();