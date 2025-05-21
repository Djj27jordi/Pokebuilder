<?php
session_start();
include 'connexio.php';

// Comprovar que s'ha enviat el formulari
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuari = $_POST['usuari'] ?? '';
    $contrasenya = $_POST['contrasenya'] ?? '';

    // Comprovar si l’usuari existeix per nom o apodo
    $stmt = $conn->prepare("SELECT * FROM usuaris WHERE nom = ? OR apodo = ?");
    $stmt->bind_param("ss", $usuari, $usuari);
    $stmt->execute();

    $resultat = $stmt->get_result();

    if ($resultat->num_rows === 1) {
        $usuariDB = $resultat->fetch_assoc();

        // Comprovem la contrasenya
        if (password_verify($contrasenya, $usuariDB['contrasenya'])) {
            // Iniciar sessió i guardar dades
            $_SESSION['ID_usuari'] = $usuariDB['ID_usuari'];
            $_SESSION['nom'] = $usuariDB['nom'];
            $_SESSION['apodo'] = $usuariDB['apodo'];
            $_SESSION['email'] = $usuariDB['email'];
            $_SESSION['admin'] = $usuariDB['admin'];
            $_SESSION['imatge'] = $usuariDB['imatge']; // Ruta de la imatge

            header("Location: ../html/index.php");
            exit();
        } else {
            header("Location: ../html/login.php?error=contrasenya");
            exit();
        }
    } else {
        header("Location: ../html/login.php?error=usuari");
        exit();
    }
} else {
    // Si no és un POST, redirigeix a login
    header("Location: ../html/login.php");
    exit();
}
?>
