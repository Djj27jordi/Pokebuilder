<?php
require '../php/connexio.php';
header("Content-Type: application/json");

if (isset($_POST['idAnt']) && isset($_POST['idProx'])) {
  
  $idAnt = $_POST['idAnt'];
  $idProx = $_POST['idProx'];

  $sql = "SELECT nom FROM pokedex WHERE ID_pokedex = '$idAnt' OR ID_pokedex = '$idProx'";

  $nomsPag = [];

  $res = mysqli_query($conn, $sql);

  while ($fila = mysqli_fetch_assoc($res)) {
    $nomsPag[] = $fila;
  }

  echo json_encode($nomsPag);
}
?>