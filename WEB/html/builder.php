<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../../IMG/logo.png" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/colors.css">
  <link rel="stylesheet" href="../css/nav_i_footer.css">
  <link rel="stylesheet" href="../css/builder.css">
  <title>PokeBuilder - Crear Equip</title>
</head>
<body class="fons_barres">
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
    
  <h1 style="font-size: 5rem; text-align:center; font-family: 'roboto';">Team Builder</h1>
  <!-- <section class="pokemonsSel">
    <div class="seleccioPokemon">
      <form action="" style="display: flex; flex-direction: row; gap: 10px;">
        <div class="poke" style="display: flex; flex-direction: column; gap: 10px; align-items: center;">
          <span class="equipPokemon" style="display: flex; flex-direction: column; gap: 10px; align-items: center; justify-content: center;">
            <img src="../../img/plus.png" id="pokemon1" alt="" style="width: 100px; height: 100px; align-self: center;">
          </span>
          <label for="pokemon" style="display: none;">Nom del Pokemon</label>
          <input type="text" name="pokemon" placeholder="Pokemon">
        </div>
      </form>
    </div>
  </section> -->
  <section class="pokemonsSel">
  <div class="seleccioPokemon" style="display: flex; flex-direction: row; gap: 10px;" id="pokemonTeam">

    <!-- PLUS BUTTON -->
    <div class="poke plus" style="display: flex; flex-direction: column; gap: 10px; align-items: center; cursor: pointer;">
      <span class="equipPokemon" style="display: flex; flex-direction: column; gap: 10px; align-items: center; justify-content: center;">
        <img src="../../img/plus.png" id="plusIcon" alt="+" style="width: 100px; height: 100px; align-self: center;">
      </span>
      <label for="pokemon" style="display: none;">Nom del Pokemon</label>
      <input type="text" name="pokemon" placeholder="Pokemon" id="pokemonInput" autocomplete="off">
    </div>

  </div>
</section>
  
  <section>
    <div class="dadesPokemon">
      <!-- IMG POKEMON -->
      <div class="fons1">
        <div class="fons2 centSelPkmn">
          <img src="https://img.pokemondb.net/sprites/black-white/normal/gengar.png" id="pokemonSel" class="pokemonSel" alt="">
        </div>
      </div>
      <!-- MOVIMENTS  -->
      <div class="fons1">
        <div class="genere">
          <div class="gen_shsiny" style="display: flex; flex-direction: row; gap: 60px;">
            <h2>Genere</h2>
            <h2>Shiny</h2>
          </div>
          <div class="centreGenere">
              <div class="genereHome">
                <input type="radio" name="homeDona" class="signeHome" id="signeHome" value="home">
                <label for="home"><i class='bx bx-md bx-male-sign'></i></label>
              </div>
              <div class="genereDona">
                <input type="radio" name="homeDona" class="signeDona" id="signeDona" value="dona">
                <label for="dona"><i class='bx bx-md bx-female-sign'></i></label>
              </div>
            <div class="Shiny" style="display: flex; flex-direction: column; justify-content: center; align-items: flex-end;">
              <div class="esShiny">
                <input type="checkbox" name="es_shiny" class="shinyy" id="shiny" value="shiny">
                <label for="home">Shiny</label>
              </div>
            </div>
          </div>
          <div>
            <h2>Moviments</h2>
            <div class="selMove">
              <select name="move1" id="move1" class="move1" required>
                <option value="" selected disabled>Moviment 1</option>
              </select>
              <select name="move2" id="move2" class="move2" required>
                <option value="" selected disabled>Moviment 2</option>
              </select>
              <select name="move3" id="move3" class="move3" required>
                <option value="" selected disabled>Moviment 3</option>
              </select>
              <select name="move4" id="move4" class="move4" required>
                <option value="" selected disabled>Moviment 4</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!-- STATS -->
      <div class="fons1">
        <div class="fons2Stats centStatsPkmn">
          <table>
            <tbody>
              <tr>
                <td class="nomStat">PS: </td>
                <td>60</td>
                <td><div id="barraBasePS"><div id="barraStatPS"></div></div></td>
              </tr>
              <tr>
                <td class="nomStat">Atac: </td>
                <td>55</td>
                <td><div id="barraBaseAtac"><div id="barraStatAtac"></div></div></td>
              </tr>
              <tr>
                <td class="nomStat">Defensa: </td>
                <td>25</td>
                <td><div id="barraBaseDefensa"><div id="barraStatDefensa"></div></div></td>
              </tr>
              <tr>
                <td class="nomStat">At.Especial: </td>
                <td>155</td>
                <td><div id="barraBaseAtEspecial"><div id="barraStatAtEspecial"></div></div></td>
              </tr>
              <tr>
                <td class="nomStat">Def.Especial: </td>
                <td>45</td>
                <td><div id="barraBaseDefEspecial"><div id="barraStatDefEspecial"></div></div></td>
              </tr>
              <tr>
                <td class="nomStat">Velocitat: </td>
                <td>115</td>
                <td><div id="barraBaseVelocitat"><div id="barraStatVelocitat"></div></div></td>
              </tr>
              <tr>
                <td class="nomStat">Total: </td>
                <td>445</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- IV / EV -->
      <div class="fons1">
        <h2>IV | EV</h2>
        <table>
          <thead>
            <tr>
              <th></th>
              <th>IV</th>
              <th>EV</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="nomStat">PS: </td>
              <td><input type="number" id="IvPS" class="IvPS" max="31"></td>
              <td><input type="number" id="EvPS" class="EvPS" max="252"></td>
            </tr>
            <tr>
              <td class="nomStat">Atac: </td>
              <td><input type="number" id="IvAtac" class="IvAtac" max="31"></td>
              <td><input type="number" id="EvAtac" class="EvAtac" max="252"></td>
            </tr>
            <tr>
              <td class="nomStat">Defensa: </td>
              <td><input type="number" id="IvDefensa" class="IvDefensa" max="31"></td>
              <td><input type="number" id="EvDefensa" class="EvDefensa" max="252"></td>
            </tr>
            <tr>
              <td class="nomStat">At.Especial: </td>
              <td><input type="number" id="IvAtEspecial" class="IvAtEspecial" max="31"></td>
              <td><input type="number" id="EvAtEspecial" class="EvAtEspecial" max="252"></td>
            </tr>
            <tr>
              <td class="nomStat">Def.Especial: </td>
              <td><input type="number" id="IvDefEspecial" class="IvDefEspecial" max="31"></td>
              <td><input type="number" id="EvDefEspecial" class="EvDefEspecial" max="252"></td>
            </tr>
            <tr>
              <td class="nomStat">Velocitat: </td>
              <td><input type="number" id="IvVelocitat" class="IvVelocitat" max="31"></td>
              <td><input type="number" id="EvVelocitat" class="EvVelocitat" max="252"></td>
            </tr>
          </tbody>
        </table>
      </div>

  </section>
  
  <section class="sectDesc">
    <div class="fons1 divDescripcio">
      <h2>Descripció Equip</h2>
      <p>Explica la principal estrategia pensada per aquest equip</p>
      <textarea name="estrategia" id="estrategia" class="estrategia" placeholder="Quina és la teva estrategia?"></textarea>
    </div>
  </section>
  
  <section class="sectGuardar">
    <button id="guardarEquip" class="guardarEquip">GUARDAR EQUIP</button>
  </section>
  
  </div>

  <footer>
    <div class="menuFooter">
      <h3>Menu Ràpid</h3>
      <ul>
        <a href="index.html"></a><li>Inici</li></a>
        <a href="pokedex.html"></a><li>Pokedex</li></a>
        <a href="builder.html"><li>Builder</li></a>
        <a href="posts.html"><li>Publicacions</li></a>
        <a href="preguntesfrq.html"><li>Preguntes frequents</li></a>
        <a href="nosaltres.html"><li>Qui som?</li></a>
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
        <div class="contacte"><a href="#"><img src="../../IMG/contacte/insta.png" alt=""></a></div>
        <div class="contacte"><a href="#"><img src="../../IMG/contacte/tiktok.png" alt=""></a></div>
        <div class="contacte"><a href="#"><img src="../../IMG/contacte/discord.png" alt=""></a></div>
        <div class="contacte"><a href="#"><img src="../../IMG/contacte/x.png" alt=""></a></div>
      </div>
    </div>
</footer>
<script src="../JavaScript/builder.js"></script>
</body>
</html>