<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/colors.css">
  <link rel="stylesheet" href="../css/nav_i_footer.css">
  <link rel="stylesheet" href="../css/perfil.css">
  <title>Perfil - </title>
</head>
<body>
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
        <div class="perfil" id="perfil">
            <?php if (isset($_SESSION['apodo'])): ?>
                <p><?= htmlspecialchars($_SESSION['apodo']) ?></p>
                <img src="<?= htmlspecialchars($_SESSION['imatge']) ?>" class="fotoUser" alt="foto del usuari">
            <?php else: ?>
                <a href="login.php">Inicia sessió</a>
            <?php endif; ?>
        </div>
    </nav>

  <section>
    <div class="estruct">
      <div class="dadesPrincipal">
        <img src="https://img.pokemondb.net/sprites/black-white/normal/seadra.png" alt="Seadra" id="fotoPerfil">
        <h2>Kento27</h2>
        <div class="totalLike">
          <i class='bx bx-md bxs-heart'></i>
          <p>27</p>
        </div>
        <textarea name="descripcioUser" id="descripcioUser" placeholder="Explica una mica de tu"></textarea>
      </div>
      <div class="equipsCreats">
        <h1>Els teus equips</h1>
        <div class="caixes">
          <div class="caixa">
            <div class="nomMiniMenu">
              <h3>Nom Equip</h3>
              <div class="menuOpcionsContainer">
                <i class='bx bx-md bx-dots-horizontal-rounded miniMenu'></i>
                <div class="menuOpcions">
                  <p>Modificar equip</p>
                  <p>Eliminar equip</p>
                </div>
              </div>
            </div>
            <div class="equip">
              <img src="https://img.pokemondb.net/sprites/black-white/normal/gengar.png" class="equipPokemon" id="pokemon1" alt="">
              <img src="https://img.pokemondb.net/sprites/black-white/normal/gengar.png" class="equipPokemon" id="pokemon2" alt="">
              <img src="https://img.pokemondb.net/sprites/black-white/normal/gengar.png" class="equipPokemon" id="pokemon3" alt="">
              <img src="https://img.pokemondb.net/sprites/black-white/normal/gengar.png" class="equipPokemon" id="pokemon4" alt="">
              <img src="https://img.pokemondb.net/sprites/black-white/normal/gengar.png" class="equipPokemon" id="pokemon5" alt="">
              <img src="https://img.pokemondb.net/sprites/black-white/normal/gengar.png" class="equipPokemon" id="pokemon6" alt="">
            </div>
            <div class="totalLikeEquip">
              <i class='bx bx-sm bxs-heart'></i>
              <p>27</p>
            </div>
          </div>
        </div>
        <div class="afegirCaixa">
          <i class='bx bx-lg bx-plus-circle'></i>
        </div>
      </div>
    </div>
  </section>

<footer>
            <div class="menuFooter">
              <h3>Menu Ràpid</h3>
              <ul>
                <li><a href="index.php">Inici</a></li>
                    <li><a href="pokedex.php">Pokedex</a></li>
                    <li><a href="builder.php">Builder</a></li>
                    <li><a href="posts.php">Publicacions</a></li>
                    <li><a href="preguntesfrq.php">Preguntes frequents</a></li>
                    <li><a href="nosaltres.php">Qui som?</a></li>
              </ul>
            </div>
            <div class="formulariFoter">
                <p class="pokebuilder_logo">
                    P
                    <span class="footer_span">
                        <img src="../../IMG/logo.png" alt="logo"/>
                    </span>
                    KÉBUILDER
                </p>
                <img src="" alt="" class="logoFooter">
                <h3>Formulari de contacte</h3>
              <div>
                <label for="emailFooter">Email: </label>
                <input type="email" name="emailFooter" id="emailFooter">
              </div>
              <div>
                <label for="msgFooter">Missatge de contacte</label>
                <textarea name="msgFooter" id="msgFooter" placeholder="Diguen's coses a millorar o si tens algun problema"></textarea>
              </div>
            </div>
            <div class="contacteFooter">
              <h3>Contacten's</h3>
              <div class="divContacte">
                <div class="contacte"><a href="https://www.instagram.com"><img src="../../IMG/contacte/insta.png" alt=""></a></div>
                <div class="contacte"><a href="https://www.tiktok.com/"><img src="../../IMG/contacte/tiktok.png" alt=""></a></div>
                <div class="contacte"><a href="https://www.discord.com/"><img src="../../IMG/contacte/discord.png" alt=""></a></div>
                <div class="contacte"><a href="https://www.x.com/"><img src="../../IMG/contacte/x.png" alt=""></a></div>
              </div>
            </div>
        </footer>
</body>
</html>