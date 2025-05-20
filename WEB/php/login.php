<?php
session_start();
include 'connexio.php';

// Recollim les dades
$usuari = $_POST['usuari'];
$contrasenya = $_POST['contrasenya'];

// Comprovar si l’usuari existeix per nom o apodo
$stmt = $conn->prepare("SELECT * FROM usuaris WHERE nom = ? OR apodo = ?");
$stmt->bind_param("ss", $usuari, $usuari);
$stmt->execute();

$resultat = $stmt->get_result();

if ($resultat->num_rows === 1) {
    $usuariDB = $resultat->fetch_assoc();

    // Comprovem la contrasenya
    if (password_verify($contrasenya, $usuariDB['contrasenya'])) {
        // Iniciar sessió
        $_SESSION['ID_usuari'] = $usuariDB['ID_usuari'];
        $_SESSION['nom'] = $usuariDB['nom'];
        $_SESSION['apodo'] = $usuariDB['apodo'];
        $_SESSION['email'] = $usuariDB['email'];
        $_SESSION['admin'] = $usuariDB['admin'];

        // Redirigir a l’inici
        header("Location: ../html/index.html");
        exit();
    } else {
        echo "Contrasenya incorrecta.";
    }
} else {
    echo "Usuari no trobat.";
}

$stmt->close();
$conn->close();
?>
