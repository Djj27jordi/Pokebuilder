<?php
header('Content-Type: application/json');

require_once 'connexio.php';

$idPokemon = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($idPokemon <= 0) {
    echo json_encode([]);
    exit;
}

$sql = "SELECT m.ID_moviment, m.nom
        FROM moviments m
        JOIN pokemon_moviments pm ON m.ID_moviment = pm.ID_moviment
        WHERE pm.ID_pokemon = $idPokemon";

$result = $conn->query($sql);

if (!$result) {
    echo json_encode([]);
    exit;
}

$moviments = [];
while ($row = $result->fetch_assoc()) {
    $moviments[] = $row;
}

echo json_encode($moviments);

$conn->close();
?>
