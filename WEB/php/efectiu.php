<?php
// require 'connexio.php';
// header("Content-Type: application/json");

// if (isset($_POST['tipo1'])) {
//     $tipo1 = $_POST['tipo1'];
//     $tipo2 = $_POST['tipo2'] ?? null;

//     // Obtenir els id_tipus a partir dels noms
//     $sqlTipus = "SELECT ID_tipos FROM tipos WHERE nom = '$tipo1'";
//     if ($tipo2) {
//         $sqlTipus .= " OR nom = '$tipo2'";
//     }

//     $resTipus = mysqli_query($conn, $sqlTipus);
//     $ids = [];
//     while ($fila = mysqli_fetch_assoc($resTipus)) {
//         $ids[] = $fila;
//     }

//     // echo json_encode($ids);

//     if (count($ids) > 0) {
//         $idsString = implode(",", $ids);
//         $sql = "SELECT * FROM efectivitat WHERE ID_tipoAt IN ($idsString) OR ID_tipoDe IN ($idsString)";
//         $res = mysqli_query($conn, $sql);

//         $efectiu = [];
//         while ($fila = mysqli_fetch_assoc($res)) {
//             $efectiu[] = $fila;
//         }
//         echo json_encode($efectiu);
//     }
// }
?>