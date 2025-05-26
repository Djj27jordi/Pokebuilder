<?php
require 'connexio.php';
header("Content-Type: application/json");

if (isset($_POST["id"])) {
  $id = $_POST["id"];

  $sql = "SELECT ID_pokedex, nom, imatgeM, imatgeF, imatgeShinyM, imatgeShinyF, pes, altura, PS, atac, defensa, atEspecial, defEspecial, velocitat, total 
          FROM pokedex WHERE ID_pokedex = '$id'";
  $resposta = mysqli_query($conn, $sql);

  if ($fila = $resposta->fetch_assoc()) {
      echo json_encode($fila); // ✅ Ara retorna un sol objecte
  }
}
?>
