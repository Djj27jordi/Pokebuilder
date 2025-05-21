<?php
require 'connexio.php'; // ajusta ruta segons el teu projecte

if (!isset($_GET['id'])) {
    http_response_code(400);
    echo json_encode(['error' => 'ID no proporcionat']);
    exit;
}

$id = intval($_GET['id']);

$sql = "
SELECT 
    p.ID_pokedex, p.nom, p.imatgeM, 
    t1.nom AS tipo1_nom, 
    t2.nom AS tipo2_nom
FROM pokedex p
LEFT JOIN tipos t1 ON p.tipo1 = t1.ID_tipos
LEFT JOIN tipos t2 ON p.tipo2 = t2.ID_tipos
WHERE p.ID_pokedex = ?
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$pokemon = $result->fetch_assoc();

header('Content-Type: application/json');
echo json_encode($pokemon);
?>