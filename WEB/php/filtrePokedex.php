<?php
require 'connexio.php';
header("Content-Type: application/json");

if (isset($_POST['filtre1'])) {
  $filtre1 = $_POST['filtre1'];
}

if (isset($_POST['filtre2'])) {
  $filtre2 = $_POST['filtre2'];
}

if ($filtre1 != "" && $filtre2 == "") {
  $sql = "SELECT p.ID_pokedex, p.nom, p.imatgeM
          FROM pokedex p
          JOIN tipos t1 ON p.tipo1 = t1.ID_tipos
          LEFT JOIN tipos t2 ON p.tipo2 = t2.ID_tipos
          WHERE t1.nom = '$filtre1' OR t2.nom = '$filtre1'";
} 
else if ($filtre1 == "" && $filtre2 != "") {
  $sql = "SELECT p.ID_pokedex, p.nom, p.imatgeM
          FROM pokedex p
          JOIN tipos t1 ON p.tipo1 = t1.ID_tipos
          LEFT JOIN tipos t2 ON p.tipo2 = t2.ID_tipos
          WHERE t1.nom = '$filtre2' OR t2.nom = '$filtre2'";
}
else if ($filtre1 != "" && $filtre2 != "") {
  $sql = "SELECT p.ID_pokedex, p.nom, p.imatgeM
          FROM pokedex p
          JOIN tipos t1 ON p.tipo1 = t1.ID_tipos
          LEFT JOIN tipos t2 ON p.tipo2 = t2.ID_tipos
          WHERE t1.nom = '$filtre1' AND t2.nom = '$filtre2'";
} else {
  $sql = "SELECT ID_pokedex, nom, imatgeM
          FROM pokedex";
}

$pokemons = [];

$res = mysqli_query($conn, $sql);

//MOSTRA L'ERROR SI LA CONSULTA FALLA
if (!$res) {
  echo json_encode(["error" => mysqli_error($conn)]);
  exit;
}

while ($fila = mysqli_fetch_assoc($res)) {
  $pokemons[] = $fila;
}

echo json_encode($pokemons);
?>
