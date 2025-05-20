<?php
  session_start();
  include 'connexio.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nom = $_POST['nom'];
      $apodo = $_POST['apodo'];
      $email = $_POST['email'];
      $contrasenya = password_hash($_POST['contrasenya'], PASSWORD_DEFAULT);
      $admin = '0';          // buida per defecte
      $suscripcio = 'Gratis';     // buida per defecte
      $imatge = '../../IMG/pokemon/069.png';

      $stmt = $conn->prepare("INSERT INTO usuaris (nom, apodo, email, contrasenya, admin, suscripcio, imatge) VALUES (?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssssss", $nom, $apodo, $email, $contrasenya, $admin, $suscripcio, $imatge);

      if ($stmt->execute()) {
          $id = $conn->insert_id;

          $_SESSION['ID_usuari'] = $id;
          $_SESSION['nom'] = $nom;
          $_SESSION['apodo'] = $apodo;
          $_SESSION['email'] = $email;
          $_SESSION['admin'] = $admin;
          $_SESSION['suscripcio'] = $suscripcio;
          $_SESSION['imatge'] = $imatge;

          header("Location: ../html/login.html");
          exit();
      } else {
          echo "Error en registrar: " . $stmt->error;
      }

      $stmt->close();
      $conn->close();
  } else {
      echo "Accés no permès.";
  }
