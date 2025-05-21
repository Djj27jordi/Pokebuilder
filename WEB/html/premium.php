<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/colors.css">
  <link rel="stylesheet" href="../css/nav_i_footer.css">
  <link rel="stylesheet" href="../css/premium.css">
  <title>Premium</title>
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

  <div class="cont_blanc">
    <header>
      <div class="generalHeader">
        <h1>Tarifes Premium</h1>
        <div class="tarifes">
          <div class="gratis">
            <h2>Pla Gratis</h2>
            <p>7 espais més per crear equips pokemon</p>
            <p>Veure equips comunitat (veure els detalls no incluit)</p>
            <button>Comprar</button>
          </div>
          <div class="premium">
            <h2>Premium</h2>
            <p>Inclou tot el contingut de Pla gratis</p>
            <p>+ 17 espais més per crear equips pokemon</p>
            <p>+ Veure equips comunitat</p>
            <p>+ Veure detalls dels equips de la comunitat</p>
            <p>+ Permet importar els equips</p>
            <button>Comprar</button>
          </div>
          <div class="premiumPlus">
            <h2>Premium +</h2>
            <p>Inclou tot el contingut dels Plans anteriors</p>
            <p>+ Espais ilimitats per crear equips pokemon</p>
            <p>+ Veure equips comunitat</p>
            <p>+ Veure detalls dels equips de la comunitat</p>
            <p>+ Permet descarregar els equips de la comunitat i guardartels</p>
            <p>+ Permet importar els equips i exportar</p>
            <button>Comprar</button>
          </div>
        </div>
      </div>
    </header>
  
    <section>
      <div class="generalSection">
        <div class="generalSection_bg">
          <table>
            <thead>
              <tr>
                <th></th>
                <th>Plan Gratis</th>
                <th>Premium</th>
                <th>Premium +</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Més espai per equips</td>
                <td class="check">✔️</td>
                <td class="check">✔️</td>
                <td class="check">✔️</td>
              </tr>
              <tr>
                <td>Acces a la comunitat</td>
                <td class="check">✔️</td>
                <td class="check">✔️</td>
                <td class="check">✔️</td>
              </tr>
              <tr>
                <td>Acces als detalls equips comunitat</td>
                <td class="cross">❌</td>
                <td class="check">✔️</td>
                <td class="check">✔️</td>
              </tr>
              <tr>
                <td>Descarregar equips</td>
                <td class="cross">❌</td>
                <td class="cross">❌</td>
                <td class="check">✔️</td>
              </tr>
              <tr>
                <td>Importar i exportar els teus equips</td>
                <td class="cross">❌</td>
                <td class="cross">❌</td>
                <td class="check">✔️</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

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