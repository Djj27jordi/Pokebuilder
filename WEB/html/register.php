<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DiversityBuilder - Inici de Sessió</title>
  <link rel="stylesheet" href="../css/colors.css">
  <link rel="stylesheet" href="../css/nav_i_footer.css">
  <link rel="stylesheet" href="../css/register.css" />
</head>
<body>
  <div class="background-image"></div>

     <nav>
        <div class="logoMenu">
            <a href="index.php">
                <img src="../../IMG/logo.png" class="logoMenu" alt="logo pagina i link al Menu">
            </a>
            <div class="menu" id="menu">
                <ul class="llistaMenu">
                    <li><a href="index.php">Inici</a></li>
                    <li class="dropdown"><a href="pokedex.php">Pokedex</a>
                        <ul class="menuDropdown">
                            <li><a href="pokedex.php">Normal</a></li>
                            <li><a href="pokedex.php">Planta</a></li>
                            <li><a href="pokedex.php">Fuego</a></li>
                            <li><a href="pokedex.php">Agua</a></li>
                            <li><a href="pokedex.php">Lucha</a></li>
                            <li><a href="pokedex.php">Bicho</a></li>
                            <li><a href="pokedex.php">Veneno</a></li>
                            <li><a href="pokedex.php">Psiquico</a></li>
                            <li><a href="pokedex.php">Fantasma</a></li>
                            <li><a href="pokedex.php">Eléctico</a></li>
                            <li><a href="pokedex.php">Hielo</a></li>
                            <li><a href="pokedex.php">Dragon</a></li>
                            <li><a href="pokedex.php">Roca</a></li>
                            <li><a href="pokedex.php">Tierra</a></li>
                            <li><a href="pokedex.php">Volador</a></li>
                        </ul>
                    </li>
                    <li><a href="builder.php">Builder</a></li>
                    <li><a href="posts.php">Publicacions</a></li>
                    <li><a href="preguntesfrq.php">Preguntes frequents</a></li>
                    <li><a href="nosaltres.php">Qui som?</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="overlay-red">
        <div class="login-box">
            <h1>Crear Usuari</h1>
              <form action="../php/register.php" method="POST">
              <label for="nom">Nom:</label>
              <input type="text" id="nom" name="nom" required />

              <label for="apodo">Apodo:</label>
              <input type="text" id="apodo" name="apodo" required />

              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required />

              <label for="contrasenya">Contrasenya:</label>
              <input type="password" id="contrasenya" name="contrasenya" required />

              <button type="submit">Crear Usuari</button>
            </form>
            <p style="margin-top: 50px; align-self: end;">Tens conta? <a href="./login.php" style="text-decoration: underline; font-weight: bold;">Inicia sessió</a></p>        
        </div>
    </div>
</body>
</html>
