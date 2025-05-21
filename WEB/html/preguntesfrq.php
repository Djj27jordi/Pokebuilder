<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/colors.css">
  <link rel="stylesheet" href="../css/nav_i_footer.css">
  <link rel="stylesheet" href="../css/preguntesfrq.css">
  <title>Preguntes Frequents</title>
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
    <h1>Preguntes Frequents</h1>
  </header>

  <section>
    <div>
      <h2>Introducció</h2>
      <p>Per a tots aquells que encara no sapiguen o acaben de entrar en el 
        mon de pokemon ús facilitem la seguent informacio per a tenir-la en 
        compte a la hora de fer equips i la comunitat</p>
    </div>
  </section>

  <section>
    <div>
      <h2>En que es diferencia els moviments/estats físics i especials?</h2>
      <p>Be, com ja hauras vist en les estadistiques de cada pokemon hi han alguns que tenen molt atac amb poc atac especial o al contrari. 
        Tenin aixo en compte, si tens un pokemon que té la estadistica d'atac més alta que la de atac especial, s'utilitzarà atacs fisics. Si s'ataques amb 
        atacs especials treuria menys perque la seva estadistica és més baixa.
      </p>
    </div>
  </section>

  <section>
    <div>
      <h2>Que son els moviments d'estat?</h2>
      <p>Els moviments d'estat són aquells que s'utilitzen per alterar les estadistiques del pokemon defensor o usuari, depenent del que faci el moviment. 
        També són moviments d'estat aquells que perjudiquen al pokemon, fent que puguis confondre, dormir, paralitzar, cremar o envenenar. Aixó són els problemes d'estat
      </p>
    </div>
  </section>

  <section>
    <div>
      <h2>Que son els IV?</h2>
      <p>Els IV (Valors Individuals) són estadístiques ocultes que determinen el potencial màxim d’un Pokémon en cada atribut: 
        PS, Atac, Defensa, Atac Especial, Defensa Especial i Velocitat. Aquests valors varien entre 0 i 31, on 31 és el valor perfecte en aquella estadística.
      </p>
      <h3>Com funcionen els IV?</h3>
      <p>Els IV (Valors Individuals) són números ocults que cada Pokémon té assignats en les seves estadístiques. Funcionen com a "gens" que determinen el seu potencial màxim.</p>
    </div>
  </section>

  <section>
    <div>
      <h2>Que son els EV?</h2>
      <p>Els EV (Valors d’Esforç) són punts que determinen com creixen les estadístiques d’un Pokémon a mesura que guanya experiència en combats. 
        A diferència dels IV (Valors Individuals), que són fixos, els EV es poden entrenar i modificar.
      </p>
      <h3>Com funcionen els IV?</h3>
      <p>Els IV (Valors Individuals) són números ocults que cada Pokémon té assignats en les seves estadístiques. Funcionen com a "gens" que determinen el 
        seu potencial màxim.</p>
    </div>
  </section>

  <section>
    <div>
      <h2>Taula de tipos?</h2>
      <p>Aqui teniu la taula de tipos pero nomes de la 1ra gen. Recordem que la web esta en fase beta i nomes hi han els pokemon i tipos de la 1ra gen
      </p>
      <div class="tablatipo">
        <img src="../../IMG/TablaTipos.png" alt="">
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