<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/colors.css">
  <link rel="stylesheet" href="../css/nav_i_footer.css">
  <link rel="stylesheet" href="../css/posts.css">
  <title>Post Pokemon</title>
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

  <header>
    <h1>Trainer's Teams</h1>
    <div class="divBuscador">
      <input type="text" placeholder="Cerca..." class="buscador">
      <i class='bx bx-search-alt-2 lupa'></i>
    </div>
  </header>

  <section>
    <div class="posts">
      <div class="post" id="post1">
        <div class="titolPost">
          <h2>Post 1</h2>
          <div class="UserPost">
            <img src="../../IMG/Pokemons/075.png" alt="">
            <h3>Kento27</h3>
          </div>
        </div>
        <div class="equipDescripcioPost">
          <div class="equipPost">
            <div class="titolEquipDetalls">
              <h3>Primer equip</h3>
              <a href="mesDetalls.html">+ DETALLS</a>
            </div>
            <div class="equipUserPost">
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/034.png" alt=""></div>
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/091.png" alt=""></div>
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/051.png" alt=""></div>
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/038Shiny.png" alt=""></div>
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/036.png" alt=""></div>
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/054Shiny.png" alt=""></div>
            </div>
          </div>
          <div class="descripcioPost">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus excepturi ad eaque culpa! Quas praesentium beatae pariatur quisquam unde voluptates rerum quos enim quia officiis, laborum commodi delectus, possimus odit.</p>
          </div>
        </div>
        <div class="divButons">
          <div class="compartir">
            <p>3</p>
            <i class='bx bx-sm  bx-share'  style='color:#000000'></i> 
          </div>
          <div class="like">
            <p>123</p>
            <i class='bx bx-sm  bx-heart'  style='color:#f32b2b'></i> 
          </div>
          <div class="descarrega">
            <p>6</p>
            <i class='bx bx-sm bx-download' style='color:#000000'></i> 
          </div>
        </div>
      </div>

      <div class="post" id="post2">
        <div class="titolPost">
          <h2>Post 1</h2>
          <div class="UserPost">
            <img src="../../IMG/Pokemons/075.png" alt="">
            <h3>Kento27</h3>
          </div>
        </div>
        <div class="equipDescripcioPost">
          <div class="equipPost">
            <div class="titolEquipDetalls">
              <h3>Primer equip</h3>
              <a href="mesDetalls.html">+ DETALLS</a>
            </div>
            <div class="equipUserPost">
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/034.png" alt=""></div>
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/091.png" alt=""></div>
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/051.png" alt=""></div>
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/038Shiny.png" alt=""></div>
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/036.png" alt=""></div>
              <div class="pokemonsPost"><img src="../../IMG/Pokemons/054Shiny.png" alt=""></div>
            </div>
          </div>
          <div class="descripcioPost">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus excepturi ad eaque culpa! Quas praesentium beatae pariatur quisquam unde voluptates rerum quos enim quia officiis, laborum commodi delectus, possimus odit.</p>
          </div>
        </div>
        <div class="divButons">
          <div class="compartir">
            <p>3</p>
            <i class='bx bx-sm  bxs-share-alt'  style='color:#000000'></i> 
          </div>
          <div class="like">
            <p>123</p>
            <i class='bx bx-sm  bx-heart'  style='color:#f32b2b'></i> 
          </div>
          <div class="descarrega">
            <p>6</p>
            <i class='bx bx-sm bx-download' style='color:#000000'></i> 
          </div>
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