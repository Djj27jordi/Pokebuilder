<?php
require '../php/connexio.php';
header("Content-Type: application/json");

if (isset($_POST['id'])) {
  
  $id = $_POST['id'];

  $sql1 = "SELECT nom FROM tipos WHERE ID_tipos = (SELECT tipo1 FROM pokedex WHERE ID_pokedex = '$id')";
  $sql2 = "SELECT nom FROM tipos WHERE ID_tipos = (SELECT tipo2 FROM pokedex WHERE ID_pokedex = '$id')";

  $tipos = [];

  $res1 = mysqli_query($conn, $sql1);
  if ($res1 && mysqli_num_rows($res1) > 0) {
      $fila1 = mysqli_fetch_assoc($res1);
      $tipos[] = $fila1;
  }

  $res2 = mysqli_query($conn, $sql2);
  if ($res2 && mysqli_num_rows($res2) > 0) {
      $fila2 = mysqli_fetch_assoc($res2);
      $tipos[] = $fila2;
  }

  echo json_encode($tipos);
}

?>