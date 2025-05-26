<?php
// Suposem que ja tens connexió a BBDD a $conn (mysqli o PDO)

header('Content-Type: application/json');

// Comprovar si l'usuari està loguejat
if (!isset($_SESSION['ID_usuari'])) {
    http_response_code(401); // No autoritzat
    echo json_encode(['error' => 'No autenticat, cal iniciar sessió']);
    exit();
}

$usuariID = $_SESSION['ID_usuari'];

$data = json_decode(file_get_contents('php://input'), true);

if (!$data || !isset($data['pokemons']) || !isset($data['usuariId'])) {
    echo json_encode(['success' => false, 'message' => 'Dades no vàlides']);
    exit;
}

$pokemons = $data['pokemons'];
$usuariId = intval($data['usuariId']);

if (count($pokemons) == 0) {
    echo json_encode(['success' => false, 'message' => 'No hi ha pokemons per guardar']);
    exit;
}

$conn = new mysqli('localhost', 'usuari', 'contrasenya', 'nom_bd');
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Error de connexió a BBDD']);
    exit;
}

// Arrays per guardar IDs insertades
$idsPokemons = [];

// Les taules van de 1r_pokemon a 6e_pokemon segons l'índex (0 a 5)
$taules = ['1er_pokemon', '2on_pokemon', '3er_pokemon', '4rt_pokemon', '5e_pokemon', '6e_pokemon'];

$conn->begin_transaction();

try {
    for ($i = 0; $i < count($pokemons); $i++) {
        $poke = $pokemons[$i];
        $taula = $taules[$i];

        // Aquí assumes que $poke té les propietats: fk_pokemon, nivell, sexe, Shiny, iv_ps, iv_atac, iv_def, iv_AEsp, iv_DEsp, iv_vel, ev_ps, ev_atac, ev_def, ev_AEsp, ev_DEsp, ev_velocitat, fk_mov1, fk_mov2, fk_mov3, fk_mov4

        $stmt = $conn->prepare("INSERT INTO $taula 
          (fk_pokemon, nivell, sexe, Shiny, iv_ps, iv_atac, iv_def, iv_AEsp, iv_DEsp, iv_vel, ev_ps, ev_atac, ev_def, ev_AEsp, ev_DEsp, ev_velocitat, fk_mov1, fk_mov2, fk_mov3, fk_mov4) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param(
          "iisiiiiiiiiiiiiiiiii",
          $poke['fk_pokemon'],
          $poke['nivell'],
          $poke['sexe'],
          $poke['Shiny'],
          $poke['iv_ps'],
          $poke['iv_atac'],
          $poke['iv_def'],
          $poke['iv_AEsp'],
          $poke['iv_DEsp'],
          $poke['iv_vel'],
          $poke['ev_ps'],
          $poke['ev_atac'],
          $poke['ev_def'],
          $poke['ev_AEsp'],
          $poke['ev_DEsp'],
          $poke['ev_velocitat'],
          $poke['fk_mov1'],
          $poke['fk_mov2'],
          $poke['fk_mov3'],
          $poke['fk_mov4']
        );

        if (!$stmt->execute()) {
            throw new Exception("Error insertant a $taula: " . $stmt->error);
        }

        $idsPokemons[] = $conn->insert_id;

        $stmt->close();
    }

    // Ara guardem a equips_pokemon
    $fk_2n = $idsPokemons[1] ?? null;
    $fk_3r = $idsPokemons[2] ?? null;
    $fk_4rt = $idsPokemons[3] ?? null;
    $fk_5e = $idsPokemons[4] ?? null;
    $fk_6e = $idsPokemons[5] ?? null;

    $stmtEquip = $conn->prepare("INSERT INTO equips_pokemon 
      (fk_1er_pokemon, fk_2on_pokemon, fk_3er_pokemon, fk_4rt_pokemon, fk_5e_pokemon, fk_6e_pokemon, fk_usuari) 
      VALUES (?, ?, ?, ?, ?, ?, ?)");

    $stmtEquip->bind_param(
        "iiiiiii",
        $idsPokemons[0],
        $fk_2n,
        $fk_3r,
        $fk_4rt,
        $fk_5e,
        $fk_6e,
        $usuariId
    );

    if (!$stmtEquip->execute()) {
        throw new Exception("Error insertant equip: " . $stmtEquip->error);
    }

    $conn->commit();

    echo json_encode(['success' => true]);

} catch (Exception $e) {
    $conn->rollback();
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

$conn->close();
?>
