<?php
    require 'connexio.php';

    $term = $_GET['term'] ?? '';
    $term = "%$term%";

    $sql = "SELECT ID_pokedex, nom, imatgeM FROM pokedex WHERE nom LIKE ? LIMIT 10";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $term);
    $stmt->execute();

    $result = $stmt->get_result();
    $results = [];

    while ($row = $result->fetch_assoc()) {
    $results[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($results);
?>