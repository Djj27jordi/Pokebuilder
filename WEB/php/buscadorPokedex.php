<?php
require 'connexio.php';

header("Content-Type: application/json");

if (isset($_POST["buscador"])) {
  $buscador = $_POST["buscador"];

  $sql = "SELECT ID_pokedex, imatgeM, nom FROM pokedex WHERE nom LIKE '%$buscador%'";
  $resposta = mysqli_query($conn, $sql);

  $pokemons = [];

  while ($fila = mysqli_fetch_assoc($resposta)) {
      $pokemons[] = $fila;
  }
  
  echo json_encode($pokemons);
}
?>